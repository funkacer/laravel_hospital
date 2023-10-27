<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //php artisan make:controller ContactController
    public function index () {
        return view('contact');
    }
}
