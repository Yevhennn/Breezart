<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactMessageRequest;
use App\Http\Requests\StoreInstallationOrderRequest;
use App\Services\TelegramService;

class OrderController extends Controller
{
    public function __construct(protected TelegramService $telegramService)
    {
    }

    /**
     * Handle installation / service order request from modal form.
     */
    public function storeInstallationOrder(StoreInstallationOrderRequest $request)
    {
        $validated = $request->validated();

        $details = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'model_name' => $validated['model_name'],
            'price' => $validated['price'] ?? 'Н/Д',
            'power_area' => $validated['power_area'] ?? 'Н/Д',
            'submitted_at' => now()->format('d.m.Y H:i'),
        ];

        $telegramMessage = config('services.telegram.order_subject', '🚀 <b>НОВАЯ ЗАЯВКА С САЙТА!</b>') . "\n\n" .
            "📦 <b>Услуга/Модель:</b> {$details['model_name']}\n" .
            "💰 <b>Цена:</b> {$details['price']}\n" .
            "⚡ <b>Детали:</b> {$details['power_area']}\n\n" .
            "👤 <b>Клиент:</b> {$details['name']}\n" .
            "📞 <b>Телефон:</b> {$details['phone']}\n" .
            "✉️ <b>Email:</b> {$details['email']}\n" .
            "⏰ <b>Время:</b> {$details['submitted_at']}";

        $this->telegramService->sendMessage($telegramMessage);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => __(config('services.forms.order_success_message', 'Спасибо! Ваша заявка успешно отправлена. Мы свяжемся с вами в ближайшее время.')),
            ]);
        }

        return redirect()->back()->with('success', __(config('services.forms.order_success_message', 'Спасибо! Ваша заявка успешно отправлена. Мы свяжемся с вами в ближайшее время.')));
    }

    /**
     * Handle general contact form submission (from Hero & Footer forms).
     */
    public function storeContactMessage(StoreContactMessageRequest $request)
    {
        $validated = $request->validated();

        $details = [
            'name' => $validated['full-name'],
            'email' => $validated['email'],
            'user_message' => $validated['message'],
            'submitted_at' => now()->format('d.m.Y H:i'),
        ];

        $telegramMessage = config('services.telegram.contact_subject', '📩 <b>НОВОЕ СООБЩЕНИЕ ИЗ ФОРМЫ СВЯЗИ!</b>') . "\n\n" .
            "👤 <b>Имя:</b> {$details['name']}\n" .
            "✉️ <b>Email:</b> {$details['email']}\n" .
            "💬 <b>Сообщение:</b>\n" . htmlspecialchars($details['user_message']) . "\n\n" .
            "⏰ <b>Время:</b> {$details['submitted_at']}";

        $this->telegramService->sendMessage($telegramMessage);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => __(config('services.forms.contact_success_message', 'Спасибо! Ваше сообщение успешно отправлено. Мы свяжемся с вами в ближайшее время.')),
            ]);
        }

        return redirect()->back()->with('success', __(config('services.forms.contact_success_message', 'Спасибо! Ваше сообщение успешно отправлено. Мы свяжемся с вами в ближайшее время.')));
    }
}
