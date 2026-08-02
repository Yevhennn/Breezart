<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TelegramService
{
    /**
     * Send HTML formatted notification to Telegram chat.
     */
    public function sendMessage(string $message): bool
    {
        $botToken = config('services.telegram.bot_token');
        $chatId = config('services.telegram.chat_id');

        if (empty($botToken) || empty($chatId) || $botToken === 'your_telegram_bot_token_here') {
            Log::warning(config('services.telegram.missing_config_message', 'Telegram notification skipped: TELEGRAM_BOT_TOKEN or TELEGRAM_CHAT_ID is not configured in .env'));
            return false;
        }

        try {
            $url = "https://api.telegram.org/bot{$botToken}/sendMessage";

            $response = Http::post($url, [
                'chat_id' => $chatId,
                'text' => $message,
                'parse_mode' => 'HTML',
                'disable_web_page_preview' => true,
            ]);

            if ($response->successful()) {
                Log::info('Telegram notification sent successfully.');
                return true;
            }

            Log::error('Telegram API error response: ' . $response->body());
            return false;
        } catch (\Throwable $e) {
            Log::error('Telegram notification exception: ' . $e->getMessage());
            return false;
        }
    }
}
