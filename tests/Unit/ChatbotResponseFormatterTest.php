<?php

namespace Tests\Unit;

use App\Services\ChatbotResponseFormatter;
use Tests\TestCase;

class ChatbotResponseFormatterTest extends TestCase
{
    public function test_formatter_normalizes_response_shape(): void
    {
        $formatter = new ChatbotResponseFormatter();

        $result = $formatter->format([
            'success' => true,
            'message' => 'Привет',
        ]);

        $this->assertTrue($result['success']);
        $this->assertSame('Привет', $result['message']);
    }
}
