<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;

class HomepageController extends Controller
{
    //php artisan make:controller HomepageController

    public function index () {
        $status = ['zdravy', 'nemocny', 'mrtvy'];
        $variables = ['name' => 'Jirka',
            'age' => 49,
            'appointments' => ['28.10.2023', '10.11.2023', '31.12.2024'],
            'status' => $status[random_int(0, count($status)-1)]
        ];
        return view('welcome', $variables);
    }
}
