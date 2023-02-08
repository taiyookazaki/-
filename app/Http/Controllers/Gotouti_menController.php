<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prefecture;
use App\Models\Gotouti_men;

class gotouti_menController extends Controller
{
    public function gotouti_men(Gotouti_men $gotouti_men)
    {   
        return view('prefectures/gotouti_men')->with(['gotouti_men'=>$gotouti_men]);
    }
}
