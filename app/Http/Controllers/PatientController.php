<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PatientController extends Controller
{
    //php artisan make:controller PatientController
    public function patientDetail ($id) {
        $data = DB::table('patient')->find($id);
        //dd($data);
        if(!isset($data)) {
            return abort(404);
        }
        return view('patientDetail', ['patient' => $data]);
    }
}
