<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PatientsController extends Controller
{
    //php artisan make:controller PatientsController
    public function index () {
        $data = DB::table('patient')->where('age', '>', 30)->get();
        //dd($data);
        return view('patients', ['patients' => $data]);
    }
}
