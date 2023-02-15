<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prefecture;
use App\Models\Gotouti_men;
use App\Models\Evaluations;
use App\Models\User;


class UsersController extends Controller
{
    public function user(User $user)
    {   
        return view('user')->with(['users'=>$user->get()]); 
       
    }
}