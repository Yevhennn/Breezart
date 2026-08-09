<?php

namespace App\Services;

use App\Models\InstallationCard;
use App\Models\ServiceCard;

class HomePageDataService
{
    public function getData(): array
    {
        return [
            'installationCards' => InstallationCard::active()->get(),
            'serviceCards' => ServiceCard::active()->get(),
        ];
    }
}
