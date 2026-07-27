<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChatbotController extends Controller
{
    public function ask(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        $userMessage = $request->input('message');
        $apiKey = env('OPENAI_API_KEY');

        if (!$apiKey || $apiKey === 'your_openai_api_key_here') {
            return response()->json([
                'success' => false,
                'message' => 'Ключ API для ИИ не настроен. Пожалуйста, обратитесь по телефону или WhatsApp.',
            ]);
        }

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $apiKey,
                'Content-Type' => 'application/json',
            ])->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-4o-mini',
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => 'Ты вежливый, профессиональный консультант компании Breezart, которая занимается установкой, ремонтом и обслуживанием кондиционеров в Португалии (Лиссабон, Сетубал, Сул). Твоя цель — помогать клиентам на русском языке. Цены: установка от 450 до 750 евро, чистка от 60 евро, заправка фреоном от 75 евро, диагностика от 50 евро, комплексное ТО от 110 евро. Отвечай кратко, емко и по существу.'
                    ],
                    [
                        'role' => 'user',
                        'content' => $userMessage
                    ]
                ],
                'max_tokens' => 300,
                'temperature' => 0.7,
            ]);

            if ($response->successful()) {
                $data = $response->json();
                $reply = $data['choices'][0]['message']['content'] ?? 'Извините, я не смог сгенерировать ответ.';

                return response()->json([
                    'success' => true,
                    'message' => $reply,
                ]);
            } else {
                Log::error('OpenAI API Error: ' . $response->body());
                return response()->json([
                    'success' => false,
                    'message' => 'Извините, сервис временно недоступен. Пожалуйста, напишите нам в WhatsApp.',
                ]);
            }
        } catch (\Exception $e) {
            Log::error('Chatbot Exception: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Произошла ошибка при подключении к серверу.',
            ]);
        }
    }
}
