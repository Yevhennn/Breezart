<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InstallationCard;
use App\Models\ServiceCard;

class HomeController extends Controller
{
    /**
     * Show the application landing page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $installationCards = InstallationCard::active()->get();
        $serviceCards = ServiceCard::active()->get();

        return view('home', compact('installationCards', 'serviceCards'));
    }
}

