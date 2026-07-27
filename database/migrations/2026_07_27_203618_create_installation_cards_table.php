<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('installation_cards', function (Blueprint $table) {
            $table->id();
            $table->string('brand');                        // Бренд: Daikin, Bosch, LG…
            $table->string('title');                        // Полное название модели
            $table->json('photos')->nullable();             // Массив путей к фото
            $table->string('power_kw');                     // Мощность: "3.5 кВт"
            $table->string('area_m2');                      // Площадь: "35 м²"
            $table->string('energy_class');                 // Класс энергоэффективности: A++, A+++
            $table->text('description');                    // Описание карточки
            $table->string('price');                        // Цена: "690 €"
            $table->string('price_label')->default('Оборудование + монтаж'); // Подпись цены
            $table->unsignedSmallInteger('sort_order')->default(0); // Порядок вывода
            $table->boolean('is_active')->default(true);    // Видима на сайте
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('installation_cards');
    }
};

