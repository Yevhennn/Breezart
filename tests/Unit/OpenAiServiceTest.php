<?php

namespace Tests\Unit;

use App\Services\OpenAiService;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class OpenAiServiceTest extends TestCase
{
    public function test_returns_fallback_when_api_key_missing(): void
    {
        config()->set('services.openai.api_key', null);

        $service = new OpenAiService();
        $result = $service->ask('Привет');

        $this->assertFalse($result['success']);
        $this->assertStringContainsString('Ключ API', $result['message']);
    }

    public function test_sends_request_to_openai_when_key_present(): void
    {
        config()->set('services.openai.api_key', 'test-key');
        config()->set('services.openai.model', 'gpt-4o-mini');

        Http::fake([
            'https://api.openai.com/v1/chat/completions' => Http::response([
                'choices' => [[
                    'message' => ['content' => 'Тестовый ответ'],
                ]],
            ], 200),
        ]);

        $service = new OpenAiService();
        $result = $service->ask('Привет');

        $this->assertTrue($result['success']);
        $this->assertSame('Тестовый ответ', $result['message']);
        Http::assertSentCount(1);
    }
}
