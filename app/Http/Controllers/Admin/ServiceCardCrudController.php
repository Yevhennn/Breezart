<?php

namespace App\Http\Controllers\Admin;

use App\Models\ServiceCard;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Управление карточками "Обслуживание кондиционеров" (section_4).
 *
 * @property \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ServiceCardCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup(): void
    {
        CRUD::setModel(ServiceCard::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/service-cards');
        CRUD::setEntityNameStrings('карточку', 'Обслуживание оборудования');
    }

    // ──────────────────────────────────────
    // LIST
    // ──────────────────────────────────────
    protected function setupListOperation(): void
    {
        CRUD::column('sort_order')->label('№')->type('number');
        CRUD::column('badge')->label('Бейдж (Категория)')->type('text');
        CRUD::column('title')->label('Название услуги')->type('text');
        CRUD::column('price')->label('Цена')->type('text');
        CRUD::column('is_active')->label('Активна')->type('boolean');
    }

    // ──────────────────────────────────────
    // CREATE
    // ──────────────────────────────────────
    protected function setupCreateOperation(): void
    {
        CRUD::setValidation([
            'badge'        => 'required|string|max:50',
            'title'        => 'required|string|max:255',
            'spec_1'       => 'nullable|string|max:100',
            'spec_2'       => 'nullable|string|max:100',
            'spec_3'       => 'nullable|string|max:100',
            'description'  => 'required|string',
            'price'        => 'required|string|max:50',
            'price_label'  => 'required|string|max:100',
            'sort_order'   => 'required|integer|min:0',
            'is_active'    => 'boolean',
        ]);

        CRUD::field([
            'name'  => 'badge',
            'label' => 'Бейдж (например: Чистка, Фреон, Ремонт)',
            'type'  => 'text',
        ]);

        CRUD::field([
            'name'  => 'title',
            'label' => 'Название услуги',
            'type'  => 'text',
        ]);

        CRUD::field([
            'name'       => 'photos',
            'label'      => 'Фотографии (Слайдер)',
            'type'       => 'upload_multiple',
            'disk'       => 'public',
            'prefix'     => 'images/cleaning/',
            'hint'       => 'Загрузите одно или несколько фото. Первое фото будет использоваться как главное.',
            'withFiles'  => [
                'disk' => 'public',
                'path' => 'images/cleaning',
                'fileNamer' => function (\Illuminate\Http\UploadedFile $file) {
                    return $file->getClientOriginalName();
                },
            ],
        ]);

        CRUD::field([
            'name'   => 'video',
            'label'  => 'Видео (Опционально)',
            'type'   => 'upload',
            'disk'   => 'public',
            'prefix' => 'images/cleaning/',
            'hint'   => 'Если есть видео, оно будет добавлено в конец слайдера. (mp4)',
            'withFiles'  => [
                'disk' => 'public',
                'path' => 'images/cleaning',
                'fileNamer' => function (\Illuminate\Http\UploadedFile $file) {
                    return $file->getClientOriginalName();
                },
            ],
        ]);

        CRUD::field([
            'name'  => 'spec_1',
            'label' => 'Характеристика 1 (например: 1 - 1.5 часа)',
            'type'  => 'text',
        ]);

        CRUD::field([
            'name'  => 'spec_2',
            'label' => 'Характеристика 2 (например: Антибактериальная)',
            'type'  => 'text',
        ]);

        CRUD::field([
            'name'  => 'spec_3',
            'label' => 'Характеристика 3 (например: Пром под давлением)',
            'type'  => 'text',
        ]);

        CRUD::field([
            'name'  => 'description',
            'label' => 'Описание',
            'type'  => 'textarea',
        ]);

        CRUD::field([
            'name'  => 'price',
            'label' => 'Цена (например: 60 €)',
            'type'  => 'text',
        ]);

        CRUD::field([
            'name'    => 'price_label',
            'label'   => 'Подпись к цене',
            'type'    => 'text',
            'default' => 'Стоимость услуги',
        ]);

        CRUD::field([
            'name'    => 'sort_order',
            'label'   => 'Порядок сортировки',
            'type'    => 'number',
            'default' => 0,
        ]);

        CRUD::field([
            'name'    => 'is_active',
            'label'   => 'Активна (отображается на сайте)',
            'type'    => 'boolean',
            'default' => true,
        ]);
    }

    // ──────────────────────────────────────
    // UPDATE
    // ──────────────────────────────────────
    protected function setupUpdateOperation(): void
    {
        $this->setupCreateOperation();
    }

    // ──────────────────────────────────────
    // SHOW
    // ──────────────────────────────────────
    protected function setupShowOperation(): void
    {
        $this->setupListOperation();

        CRUD::column('description')->label('Описание')->type('textarea');
        CRUD::column('spec_1')->label('Характеристика 1')->type('text');
        CRUD::column('spec_2')->label('Характеристика 2')->type('text');
        CRUD::column('spec_3')->label('Характеристика 3')->type('text');
        CRUD::column('photos')->label('Фото')->type('array');
        CRUD::column('video')->label('Видео')->type('text');
    }
}
