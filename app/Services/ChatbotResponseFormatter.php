<?php

namespace App\Services;

class ChatbotResponseFormatter
{
    public function format(array $response): array
    {
        return [
            'success' => $response['success'] ?? false,
            'message' => $response['message'] ?? '',
        ];
    }
}
