<?php

namespace App\Http\Controllers\Admin;

use App\Models\InstallationCard;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Управление карточками "Установка нового оборудования" (section_3).
 *
 * @property \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class InstallationCardCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup(): void
    {
        CRUD::setModel(InstallationCard::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/installation-cards');
        CRUD::setEntityNameStrings('карточку', 'Установка нового оборудования');
    }

    // ──────────────────────────────────────
    // LIST
    // ──────────────────────────────────────
    protected function setupListOperation(): void
    {
        CRUD::column('sort_order')->label('№')->type('number');
        CRUD::column('brand')->label('Бренд')->type('text');
        CRUD::column('title')->label('Название модели')->type('text');
        CRUD::column('power_kw')->label('Мощность')->type('text');
        CRUD::column('area_m2')->label('Площадь')->type('text');
        CRUD::column('energy_class')->label('Класс энергии')->type('text');
        CRUD::column('price')->label('Цена')->type('text');
        CRUD::column('is_active')->label('Активна')->type('boolean');
    }

    // ──────────────────────────────────────
    // CREATE
    // ──────────────────────────────────────
    protected function setupCreateOperation(): void
    {
        CRUD::setValidation([
            'brand'        => 'required|string|max:100',
            'title'        => 'required|string|max:255',
            'power_kw'     => 'required|string|max:50',
            'area_m2'      => 'required|string|max:50',
            'energy_class' => 'required|string|max:20',
            'description'  => 'required|string',
            'price'        => 'required|string|max:50',
            'price_label'  => 'required|string|max:100',
            'sort_order'   => 'required|integer|min:0',
            'is_active'    => 'boolean',
        ]);

        CRUD::field([
            'name'  => 'brand',
            'label' => 'Бренд',
            'type'  => 'text',
        ]);

        CRUD::field([
            'name'  => 'title',
            'label' => 'Название модели',
            'type'  => 'text',
        ]);

        CRUD::field([
            'name'       => 'photos',
            'label'      => 'Фотографии',
            'type'       => 'upload_multiple',
            'disk'       => 'public',
            'prefix'     => 'images/install_aircondi/',
            'hint'       => 'Загрузите одно или несколько фото. Первое фото будет использоваться как превью.',
            'withFiles'  => [
                'disk' => 'public',
                'path' => 'images/install_aircondi',
                'fileNamer' => function (\Illuminate\Http\UploadedFile $file) {
                    return $file->getClientOriginalName();
                },
            ],
        ]);

        CRUD::field([
            'name'  => 'power_kw',
            'label' => 'Мощность (например: 3.5 кВт)',
            'type'  => 'text',
        ]);

        CRUD::field([
            'name'  => 'area_m2',
            'label' => 'Площадь помещения (например: 35 м²)',
            'type'  => 'text',
        ]);

        CRUD::field([
            'name'    => 'energy_class',
            'label'   => 'Класс энергоэффективности',
            'type'    => 'select_from_array',
            'options' => [
                'A+'   => 'A+',
                'A++'  => 'A++',
                'A+++' => 'A+++',
                'B'    => 'B',
                'C'    => 'C',
            ],
            'allows_null' => false,
        ]);

        CRUD::field([
            'name'  => 'description',
            'label' => 'Описание',
            'type'  => 'textarea',
        ]);

        CRUD::field([
            'name'  => 'price',
            'label' => 'Цена (например: 690 €)',
            'type'  => 'text',
        ]);

        CRUD::field([
            'name'    => 'price_label',
            'label'   => 'Подпись к цене',
            'type'    => 'text',
            'default' => 'Оборудование + монтаж',
        ]);

        CRUD::field([
            'name'    => 'sort_order',
            'label'   => 'Порядок сортировки',
            'type'    => 'number',
            'default' => 0,
            'hint'    => 'Чем меньше число — тем раньше карточка появляется в карусели.',
        ]);

        CRUD::field([
            'name'    => 'is_active',
            'label'   => 'Активна (отображается на сайте)',
            'type'    => 'boolean',
            'default' => true,
        ]);
    }

    // ──────────────────────────────────────
    // UPDATE (те же поля что и при создании)
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
        CRUD::column('price_label')->label('Подпись цены')->type('text');
        CRUD::column('photos')->label('Фото')->type('array');
    }
}
