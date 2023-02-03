<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prefecture;
use App\Models\Gotouti_men;

class gotouti_menController extends Controller
{
    public function prefecture(Prefecture $prefecture,Gotouti_men $gotouti_men)
    {
        return view('prefectures/prefecture')->with(['prefecture' => $prefecture,'gotouti_men'=>$gotouti_men]);
    }
}
