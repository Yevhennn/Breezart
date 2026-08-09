<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

class InstallationCard extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = 'installation_cards';

    protected $fillable = [
        'brand',
        'title',
        'photos',
        'power_kw',
        'area_m2',
        'energy_class',
        'description',
        'price',
        'price_label',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'photos'    => 'array',
        'is_active' => 'boolean',
    ];

    /**
     * Scope для вывода только активных карточек, отсортированных по sort_order.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('sort_order');
    }

    /**
     * Возвращает первое фото для превью.
     */
    public function getFirstPhotoAttribute(): ?string
    {
        $photos = $this->photos;
        return $photos[0] ?? null;
    }
}
