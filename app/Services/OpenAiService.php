<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OpenAiService
{
    public function __construct(protected ?ChatbotResponseFormatter $formatter = null)
    {
        $this->formatter = $formatter ?? new ChatbotResponseFormatter();
    }

    public function ask(string $message): array
    {
        $apiKey = config('services.openai.api_key');

        if (empty($apiKey) || $apiKey === 'your_openai_api_key_here') {
            return $this->formatter->format([
                'success' => false,
                'message' => config('services.openai.missing_key_message', 'Ключ API для ИИ не настроен. Пожалуйста, обратитесь по телефону или WhatsApp.'),
            ]);
        }

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $apiKey,
                'Content-Type' => 'application/json',
            ])->post('https://api.openai.com/v1/chat/completions', [
                'model' => config('services.openai.model', 'gpt-4o-mini'),
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => config('services.openai.system_prompt', 'Ты вежливый консультант.'),
                    ],
                    [
                        'role' => 'user',
                        'content' => $message,
                    ],
                ],
                'max_tokens' => 300,
                'temperature' => 0.7,
            ]);

            if ($response->successful()) {
                $data = $response->json();
                $reply = $data['choices'][0]['message']['content'] ?? config('services.openai.fallback_message', 'Извините, я не смог сгенерировать ответ.');

                return $this->formatter->format([
                    'success' => true,
                    'message' => $reply,
                ]);
            }

            Log::error('OpenAI API Error: ' . $response->body());

            return $this->formatter->format([
                'success' => false,
                'message' => config('services.openai.service_unavailable_message', 'Извините, сервис временно недоступен. Пожалуйста, напишите нам в WhatsApp.'),
            ]);
        } catch (\Throwable $e) {
            Log::error('Chatbot Exception: ' . $e->getMessage());

            return $this->formatter->format([
                'success' => false,
                'message' => config('services.openai.connection_error_message', 'Произошла ошибка при подключении к серверу.'),
            ]);
        }
    }
}
