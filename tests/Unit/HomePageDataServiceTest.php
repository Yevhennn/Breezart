<?php

namespace Tests\Unit;

use App\Models\InstallationCard;
use App\Models\ServiceCard;
use App\Services\HomePageDataService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomePageDataServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_returns_only_active_cards_for_home_page(): void
    {
        InstallationCard::create([
            'brand' => 'TestBrand',
            'title' => 'Active installation',
            'photos' => ['photo.jpg'],
            'power_kw' => 3.5,
            'area_m2' => 40,
            'energy_class' => 'A',
            'description' => 'Active card',
            'price' => 500,
            'price_label' => 'от 500',
            'sort_order' => 1,
            'is_active' => true,
        ]); 

        InstallationCard::create([
            'brand' => 'TestBrand',
            'title' => 'Inactive installation',
            'photos' => ['photo.jpg'],
            'power_kw' => 2.5,
            'area_m2' => 30,
            'energy_class' => 'B',
            'description' => 'Inactive card',
            'price' => 300,
            'price_label' => 'от 300',
            'sort_order' => 2,
            'is_active' => false,
        ]);

        ServiceCard::create([
            'badge' => 'Popular',
            'title' => 'Active service',
            'photos' => ['service.jpg'],
            'video' => null,
            'spec_1' => 'Spec 1',
            'spec_2' => 'Spec 2',
            'spec_3' => 'Spec 3',
            'description' => 'Active service',
            'price' => 100,
            'price_label' => 'от 100',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        ServiceCard::create([
            'badge' => 'Hidden',
            'title' => 'Inactive service',
            'photos' => ['service.jpg'],
            'video' => null,
            'spec_1' => 'Spec 1',
            'spec_2' => 'Spec 2',
            'spec_3' => 'Spec 3',
            'description' => 'Inactive service',
            'price' => 80,
            'price_label' => 'от 80',
            'sort_order' => 2,
            'is_active' => false,
        ]);

        $service = new HomePageDataService();
        $data = $service->getData();

        $this->assertCount(1, $data['installationCards']);
        $this->assertCount(1, $data['serviceCards']);
        $this->assertSame('Active installation', $data['installationCards']->first()->title);
        $this->assertSame('Active service', $data['serviceCards']->first()->title);
    }
}
