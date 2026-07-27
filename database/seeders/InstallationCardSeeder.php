<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InstallationCard;

class InstallationCardSeeder extends Seeder
{
    public function run(): void
    {
        // Удаляем старые данные перед повторным запуском
        InstallationCard::truncate();

        $cards = [
            [
                'brand'        => 'Daikin',
                'title'        => 'Daikin Sensira FTXF35D',
                'photos'       => [
                    'images/install_aircondi/daikin1.jpg',
                    'images/install_aircondi/daikin2.jpg',
                ],
                'power_kw'     => '3.5 кВт',
                'area_m2'      => '35 м²',
                'energy_class' => 'A++',
                'description'  => 'Энергоэффективный инверторный кондиционер с фильтром Titanium Apatite и минимальным уровнем шума 20 дБ.',
                'price'        => '690 €',
                'price_label'  => 'Оборудование + монтаж',
                'sort_order'   => 1,
                'is_active'    => true,
            ],
            [
                'brand'        => 'Bosch',
                'title'        => 'Bosch Climate 3000i',
                'photos'       => [
                    'images/install_aircondi/bosh1.jpg',
                    'images/install_aircondi/bosh2.jpg',
                    'images/install_aircondi/bosh3.jpg',
                    'images/install_aircondi/bosh4.jpg',
                ],
                'power_kw'     => '3.5 кВт',
                'area_m2'      => '35 м²',
                'energy_class' => 'A++',
                'description'  => 'Немецкое качество, ионизатор воздуха HD-фильтр, модуль Wi-Fi и интеллектуальная функция Follow Me.',
                'price'        => '640 €',
                'price_label'  => 'Оборудование + монтаж',
                'sort_order'   => 2,
                'is_active'    => true,
            ],
            [
                'brand'        => 'LG',
                'title'        => 'LG Dualcool Inverter',
                'photos'       => [
                    'images/install_aircondi/lg1.jpg',
                    'images/install_aircondi/lg2.jpg',
                    'images/install_aircondi/lg3.jpg',
                ],
                'power_kw'     => '3.5 кВт',
                'area_m2'      => '35 м²',
                'energy_class' => 'A++',
                'description'  => 'Технология Dual Inverter с быстрой заморозкой и экономией энергии до 70%, супертихий режим 19 дБ.',
                'price'        => '620 €',
                'price_label'  => 'Оборудование + монтаж',
                'sort_order'   => 3,
                'is_active'    => true,
            ],
            [
                'brand'        => 'Samsung',
                'title'        => 'Samsung WindFree',
                'photos'       => [
                    'images/install_aircondi/samsung1.jpg',
                    'images/install_aircondi/samsung2.jpg',
                ],
                'power_kw'     => '3.5 кВт',
                'area_m2'      => '35 м²',
                'energy_class' => 'A++',
                'description'  => 'Охлаждение без неприятного прямого сквозняка через 23 000 микроотверстий и управление со смартфона.',
                'price'        => '710 €',
                'price_label'  => 'Оборудование + монтаж',
                'sort_order'   => 4,
                'is_active'    => true,
            ],
            [
                'brand'        => 'Haier',
                'title'        => 'Haier Flexis Matt',
                'photos'       => [
                    'images/install_aircondi/haier1.jpg',
                    'images/install_aircondi/haier2.jpg',
                    'images/install_aircondi/haier3.jpg',
                    'images/install_aircondi/haier4.jpg',
                ],
                'power_kw'     => '3.5 кВт',
                'area_m2'      => '35 м²',
                'energy_class' => 'A+++',
                'description'  => 'УФ-лампа стерилизации воздуха, термолокация присутствия людей, функция заморозки-самоочистки Self-Clean.',
                'price'        => '590 €',
                'price_label'  => 'Оборудование + монтаж',
                'sort_order'   => 5,
                'is_active'    => true,
            ],
            [
                'brand'        => 'Midea',
                'title'        => 'Midea Xtreme Save',
                'photos'       => [
                    'images/install_aircondi/midea1.jpg',
                    'images/install_aircondi/midea2.jpg',
                ],
                'power_kw'     => '3.5 кВт',
                'area_m2'      => '35 м²',
                'energy_class' => 'A+++',
                'description'  => 'Сверхэкономичное энергопотребление i-Eco, система двойной фильтрации и генератор ионов Air Magic.',
                'price'        => '520 €',
                'price_label'  => 'Оборудование + монтаж',
                'sort_order'   => 6,
                'is_active'    => true,
            ],
            [
                'brand'        => 'Mitsubishi',
                'title'        => 'Mitsubishi Electric',
                'photos'       => [
                    'images/install_aircondi/mitsubishi1.jpg',
                    'images/install_aircondi/mitsubishi2.jpg',
                ],
                'power_kw'     => '3.4 кВт',
                'area_m2'      => '35 м²',
                'energy_class' => 'A++',
                'description'  => 'Премиальная японская сборка, бесшумная работа (21 дБ) и рекордная долговечность компрессора.',
                'price'        => '750 €',
                'price_label'  => 'Оборудование + монтаж',
                'sort_order'   => 7,
                'is_active'    => true,
            ],
            [
                'brand'        => 'Bauf',
                'title'        => 'Bauf Eco Inverter',
                'photos'       => [
                    'images/install_aircondi/bauf1.jpg',
                    'images/install_aircondi/bauf2.jpg',
                    'images/install_aircondi/bauf3.jpg',
                    'images/install_aircondi/bauf4.jpg',
                ],
                'power_kw'     => '3.5 кВт',
                'area_m2'      => '35 м²',
                'energy_class' => 'A+',
                'description'  => 'Надежная доступная сплит-система с компрессором нового поколения, защитным покрытием и турбо-режимом.',
                'price'        => '450 €',
                'price_label'  => 'Оборудование + монтаж',
                'sort_order'   => 8,
                'is_active'    => true,
            ],
        ];

        foreach ($cards as $card) {
            InstallationCard::create($card);
        }
    }
}
