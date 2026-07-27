<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    /**
     * Handle installation order request from modal form.
     */
    public function storeInstallationOrder(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'model_name' => 'required|string|max:255',
            'price' => 'nullable|string|max:100',
            'power_area' => 'nullable|string|max:255',
        ]);

        $details = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'model_name' => $validated['model_name'],
            'price' => $validated['price'] ?? 'Н/Д',
            'power_area' => $validated['power_area'] ?? 'Н/Д',
            'submitted_at' => now()->toDateTimeString(),
        ];

        // Format email message
        $messageBody = "Новая заявка на установку кондиционера:\n\n" .
            "Модель: {$details['model_name']}\n" .
            "Цена: {$details['price']}\n" .
            "Мощность / Площадь: {$details['power_area']}\n\n" .
            "Контактные данные клиента:\n" .
            "Имя: {$details['name']}\n" .
            "Email: {$details['email']}\n" .
            "Телефон: {$details['phone']}\n" .
            "Дата отправки: {$details['submitted_at']}\n";

        try {
            // Send raw email log or mailer
            Mail::raw($messageBody, function ($message) use ($details) {
                $message->to('breezartclima@gmail.com')
                    ->subject("Заявка на установку: {$details['model_name']} ({$details['name']})");
            });

            Log::info("Installation order sent successfully", $details);
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
}
