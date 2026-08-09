<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceCard;

class ServiceCardSeeder extends Seeder
{
    public function run(): void
    {
        ServiceCard::truncate();

        $cards = [
            [
                'badge'        => 'Чистка',
                'title'        => 'Чистка и дезинфекция кондиционера',
                'photos'       => [
                    'images/cleaning/cleaning1.jpg',
                    'images/cleaning/cleanin2.jpg',
                    'images/cleaning/cleaning3.jpg',
                ],
                'video'        => 'images/cleaning/cleaning1.mp4',
                'spec_1'       => '1 - 1.5 часа',
                'spec_2'       => 'Антибактериальная',
                'spec_3'       => 'Пром под давлением',
                'description'  => 'Глубокая очистка внутреннего и наружного блоков, дезинфекция паром, промывка теплообменников и обработка фильтров.',
                'price'        => '60 €',
                'price_label'  => 'Стоимость услуги',
                'sort_order'   => 1,
                'is_active'    => true,
            ],
            [
                'badge'        => 'Фреон',
                'title'        => 'Заправка фреоном R32 / R410A',
                'photos'       => [
                    'images/cleaning/load_freon1.jpg',
                    'images/cleaning/load_freon2.jpg',
                    'images/cleaning/load_freon3.jpg',
                ],
                'video'        => 'images/cleaning/cleaning2.mp4',
                'spec_1'       => 'Поиск утечек',
                'spec_2'       => 'Хладагент R32/R410A',
                'spec_3'       => 'Вакуумирование',
                'description'  => 'Проверка трассы на герметичность, устранение микроутечек, вакуумирование контура и заправка фреона по весам.',
                'price'        => '75 €',
                'price_label'  => 'Стоимость услуги',
                'sort_order'   => 2,
                'is_active'    => true,
            ],
            [
                'badge'        => 'Ремонт',
                'title'        => 'Диагностика и ремонт кондиционеров',
                'photos'       => [
                    'images/cleaning/cleaning3.jpg',
                    'images/cleaning/cleaning1.jpg',
                ],
                'video'        => 'images/cleaning/cleaning3.mp4',
                'spec_1'       => 'Компьютерная',
                'spec_2'       => 'Срочный выезд',
                'spec_3'       => 'Гарантия',
                'description'  => 'Компьютерная диагностика платы управления, проверка компрессора, устранение течи дренажа и замена запчастей.',
                'price'        => '50 €',
                'price_label'  => 'Стоимость услуги',
                'sort_order'   => 3,
                'is_active'    => true,
            ],
            [
                'badge'        => 'Комплекс',
                'title'        => 'Комплексное техническое обслуживание (ТО)',
                'photos'       => [
                    'images/cleaning/cleanin2.jpg',
                    'images/cleaning/load_freon1.jpg',
                ],
                'video'        => 'images/cleaning/clening4.mp4',
                'spec_1'       => 'Все включено',
                'spec_2'       => 'Гарантия 12 мес',
                'spec_3'       => 'Проверка 15 точ',
                'description'  => 'Полный сервис: промывка двух блоков, антибактериальная дезинфекция, замер давления фреона, протяжка контактов.',
                'price'        => '110 €',
                'price_label'  => 'Стоимость услуги',
                'sort_order'   => 4,
                'is_active'    => true,
            ],
        ];

        foreach ($cards as $card) {
            ServiceCard::create($card);
        }
    }
}
