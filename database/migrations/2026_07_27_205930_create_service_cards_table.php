<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_cards', function (Blueprint $table) {
            $table->id();
            $table->string('badge');                        // Бейдж: Чистка, Фреон…
            $table->string('title');                        // Полное название
            $table->json('photos')->nullable();             // Массив путей к фото
            $table->string('video')->nullable();            // Путь к видео
            $table->string('spec_1')->nullable();           // Характеристика 1
            $table->string('spec_2')->nullable();           // Характеристика 2
            $table->string('spec_3')->nullable();           // Характеристика 3
            $table->text('description');                    // Описание карточки
            $table->string('price');                        // Цена: "60 €"
            $table->string('price_label')->default('Стоимость услуги'); // Подпись цены
            $table->unsignedSmallInteger('sort_order')->default(0); // Порядок вывода
            $table->boolean('is_active')->default(true);    // Видима на сайте
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_cards');
    }
};
