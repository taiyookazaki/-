<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prefecture;
use App\Models\Gotouti_men;

class gotouti_menController extends Controller
{
    public function gotouti_men(Gotouti_men $gotouti_men)
    {   
        return view('prefectures/gotouti_men')->with(['gotouti_men'=>$gotouti_men,"liked_gotouti_men_lists" => auth()->user()->likedGotouti_men]);
    }
    public function like(Request $request, Gotouti_men $gotouti_men)
    {
        $gotouti_men->likedUsers()->attach(auth()->user());
        return redirect("/gotouti_men/" . $gotouti_men->id);
    }    
        public function unlike(Request $request, Gotouti_men $gotouti_men)
    {
        $gotouti_men->likedUsers()->detach(auth()->user());
        return redirect("/gotouti_men/" . $gotouti_men->id);
    }
    
}
