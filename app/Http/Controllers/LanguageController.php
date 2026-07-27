<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Switch language and save to session.
     *
     * @param string $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switchLang($locale)
    {
        if (array_key_exists($locale, ['ru' => 'Russian', 'pt' => 'Portuguese'])) {
            Session::put('applocale', $locale);
        }
        return redirect()->back();
    }
}
