<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Lang extends Controller
{
    public function switchLanguage($language)
    {


        App::setLocale($language);
        config(['app.locale' => $language]);
//        dd(config('app.locale'));


        return redirect()->back();
    }

}
