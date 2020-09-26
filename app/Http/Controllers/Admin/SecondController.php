<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class SecondController extends Controller
{
    public function __construct()
    {
         $this -> middleware('auth');
    }
    public static function showString0()
    {
        return "Static String - 0"; 
    }
    public static function showString1()
    {
        return "Static String - 1"; 
    }
    public static function showString2()
    {
        return "Static String - 2"; 
    }
    public static function showString3()
    {
        return "Static String - 3"; 
    }
}
