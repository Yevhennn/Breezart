<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'openai' => [
        'api_key' => env('OPENAI_API_KEY'),
        'model' => env('OPENAI_MODEL', 'gpt-4o-mini'),
        'system_prompt' => env('OPENAI_SYSTEM_PROMPT', 'Ты вежливый, профессиональный консультант компании Breezart Clima, которая занимается установкой, ремонтом и обслуживанием кондиционеров в Португалии. Твоя цель — помогать клиентам на русском языке. Цены: установка от 450 до 750 евро, чистка от 60 евро, заправка фреоном от 75 евро, диагностика от 50 евро, комплексное ТО от 110 евро. Отвечай кратко, емко и по существу.'),
        'fallback_message' => env('OPENAI_FALLBACK_MESSAGE', 'Извините, я не смог сгенерировать ответ.'),
        'missing_key_message' => env('OPENAI_MISSING_KEY_MESSAGE', 'Ключ API для ИИ не настроен. Пожалуйста, обратитесь по телефону или WhatsApp.'),
        'service_unavailable_message' => env('OPENAI_SERVICE_UNAVAILABLE_MESSAGE', 'Извините, сервис временно недоступен. Пожалуйста, напишите нам в WhatsApp.'),
        'connection_error_message' => env('OPENAI_CONNECTION_ERROR_MESSAGE', 'Произошла ошибка при подключении к серверу.'),
    ],

    'telegram' => [
        'bot_token' => env('TELEGRAM_BOT_TOKEN'),
        'chat_id' => env('TELEGRAM_CHAT_ID'),
        'missing_config_message' => env('TELEGRAM_MISSING_CONFIG_MESSAGE', 'Telegram notification skipped: TELEGRAM_BOT_TOKEN or TELEGRAM_CHAT_ID is not configured in .env'),
        'order_subject' => env('TELEGRAM_ORDER_SUBJECT', '🚀 <b>НОВАЯ ЗАЯВКА С САЙТА!</b>'),
        'contact_subject' => env('TELEGRAM_CONTACT_SUBJECT', '📩 <b>НОВОЕ СООБЩЕНИЕ ИЗ ФОРМЫ СВЯЗИ!</b>'),
    ],

    'forms' => [
        'order_success_message' => env('FORM_ORDER_SUCCESS_MESSAGE', 'Спасибо! Ваша заявка успешно отправлена. Мы свяжемся с вами в ближайшее время.'),
        'contact_success_message' => env('FORM_CONTACT_SUCCESS_MESSAGE', 'Спасибо! Ваше сообщение успешно отправлено. Мы свяжемся с вами в ближайшее время.'),
    ],

];
