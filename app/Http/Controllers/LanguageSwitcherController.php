<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageSwitcherController extends Controller
{
    /**
     * Language switcher.
     *
     * @param null|string $lang
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index(?string $lang = null, Request $request)
    {
        if(!empty($lang))
        {
            $locale = $lang;
        } else {
            $locale = $request->get('locale');
        }

        $request->session()->put('locale', $locale);
        return redirect()->back();
    }
}