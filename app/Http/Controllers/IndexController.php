<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\controller;

class IndexController extends Controller
{
    public static function getIndex()
    {
        return view('welcome');
    }
}
