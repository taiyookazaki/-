<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prefecture;
use App\Models\Gotouti_men;

class PrefecturesController extends Controller
{
    public function index(Prefecture $prefecture)
    {
        return view('prefectures/index')->with(['prefectures' => $prefecture->getByLimit()]);
    }
    
    public function prefecture(Prefecture $prefecture,Gotouti_men $gotouti_men)
    {
        $gotouti_men=$prefecture->gotouti_mens()->get();    
        return view('prefectures/prefecture')->with(['prefecture'=>$prefecture,'gotouti_men'=>$gotouti_men]);
    }
}

