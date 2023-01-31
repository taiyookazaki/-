<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prefecture;

class PrefecturesController extends Controller
{
    public function index(Prefecture $prefecture)
{
    return $prefecture->get();
}
}
