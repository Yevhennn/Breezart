<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Services\TelegramService;

class OrderController extends Controller
{
    /**
     * Handle installation / service order request from modal form.
     */
    public function storeInstallationOrder(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|max:255',
            'phone'      => 'required|string|max:50',
            'model_name' => 'required|string|max:255',
            'price'      => 'nullable|string|max:100',
            'power_area' => 'nullable|string|max:255',
        ]);

        $details = [
            'name'         => $validated['name'],
            'email'        => $validated['email'],
            'phone'        => $validated['phone'],
            'model_name'   => $validated['model_name'],
            'price'        => $validated['price'] ?? 'Н/Д',
            'power_area'   => $validated['power_area'] ?? 'Н/Д',
            'submitted_at' => now()->format('d.m.Y H:i'),
        ];

        // 1. Send Telegram Notification
        $telegramMessage = "🚀 <b>НОВАЯ ЗАЯВКА С САЙТА!</b>\n\n" .
            "📦 <b>Услуга/Модель:</b> {$details['model_name']}\n" .
            "💰 <b>Цена:</b> {$details['price']}\n" .
            "⚡ <b>Детали:</b> {$details['power_area']}\n\n" .
            "👤 <b>Клиент:</b> {$details['name']}\n" .
            "📞 <b>Телефон:</b> {$details['phone']}\n" .
            "✉️ <b>Email:</b> {$details['email']}\n" .
            "⏰ <b>Время:</b> {$details['submitted_at']}";

        TelegramService::sendMessage($telegramMessage);

        // 2. Email Fallback
        $emailBody = "Новая заявка на установку / обслуживание кондиционера:\n\n" .
            "Модель / Услуга: {$details['model_name']}\n" .
            "Цена: {$details['price']}\n" .
            "Детали: {$details['power_area']}\n\n" .
            "Контактные данные клиента:\n" .
            "Имя: {$details['name']}\n" .
            "Email: {$details['email']}\n" .
            "Телефон: {$details['phone']}\n" .
            "Дата отправки: {$details['submitted_at']}\n";

        try {
            $receiveEmail = env('MAIL_RECEIVE_ADDRESS', 'your_email@example.com');
            Mail::raw($emailBody, function ($message) use ($details, $receiveEmail) {
                $message->to($receiveEmail)
                    ->subject("Заявка: {$details['model_name']} ({$details['name']})");
            });
            Log::info("Installation order email log created", $details);
        } catch (\Exception $e) {
            Log::error("Failed to send installation order email: " . $e->getMessage(), $details);
        }

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => __('Спасибо! Ваша заявка успешно отправлена. Мы свяжемся с вами в ближайшее время.')
            ]);
        }

        return redirect()->back()->with('success', __('Спасибо! Ваша заявка успешно отправлена. Мы свяжемся с вами в ближайшее время.'));
    }

    /**
     * Handle general contact form submission (from Hero & Footer forms).
     */
    public function storeContactMessage(Request $request)
    {
        $validated = $request->validate([
            'full-name' => 'required|string|max:255',
            'email'     => 'required|email|max:255',
            'message'   => 'required|string|max:2000',
        ]);

        $details = [
            'name'         => $validated['full-name'],
            'email'        => $validated['email'],
            'user_message' => $validated['message'],
            'submitted_at' => now()->format('d.m.Y H:i'),
        ];

        // 1. Send Telegram Notification
        $telegramMessage = "📩 <b>НОВОЕ СООБЩЕНИЕ ИЗ ФОРМЫ СВЯЗИ!</b>\n\n" .
            "👤 <b>Имя:</b> {$details['name']}\n" .
            "✉️ <b>Email:</b> {$details['email']}\n" .
            "💬 <b>Сообщение:</b>\n" . htmlspecialchars($details['user_message']) . "\n\n" .
            "⏰ <b>Время:</b> {$details['submitted_at']}";

        TelegramService::sendMessage($telegramMessage);

        // 2. Email Fallback
        $emailBody = "Новое сообщение с формы контактов:\n\n" .
            "Имя: {$details['name']}\n" .
            "Email: {$details['email']}\n" .
            "Сообщение:\n{$details['user_message']}\n\n" .
            "Дата отправки: {$details['submitted_at']}\n";

        try {
            $receiveEmail = env('MAIL_RECEIVE_ADDRESS', 'your_email@example.com');
            Mail::raw($emailBody, function ($message) use ($details, $receiveEmail) {
                $message->to($receiveEmail)
                    ->subject("Сообщение от {$details['name']}");
            });
        } catch (\Exception $e) {
            Log::error("Failed to send contact message email: " . $e->getMessage(), $details);
        }

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => __('Спасибо! Ваше сообщение успешно отправлено. Мы свяжемся с вами в ближайшее время.')
            ]);
        }

        return redirect()->back()->with('success', __('Спасибо! Ваше сообщение успешно отправлено. Мы свяжемся с вами в ближайшее время.'));
    }
}
