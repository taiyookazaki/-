<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class LikeController extends Controller
{
    public function like(Request $request, Gotouti_men $gotouti_men)
    {
        $gotouti_men->likedUsers()->attach(auth()->user());
        return redirect(route("gotouti_men.index"));
    }
}

