<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function privacyPolicy()
    {
        return view('privacyPolicy');
    }

    public function termsUse()
    {
        return view('termsUse');
    }
}