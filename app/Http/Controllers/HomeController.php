<?php

namespace App\Http\Controllers;

use App\Services\HomePageDataService;

class HomeController extends Controller
{
    public function __construct(protected HomePageDataService $homePageDataService)
    {
    }
    /**
     * Show the application landing page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = $this->homePageDataService->getData();

        return view('home', $data);
    }
}

