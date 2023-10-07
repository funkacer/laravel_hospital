<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $status = ['zdravy', 'nemocny', 'mrtvy'];
    $variables = ['name' => 'Jirka',
        'age' => 49,
        'appointments' => ['28.10.2023', '10.11.2023', '31.12.2024'],
        'status' => $status[random_int(0, count($status)-1)]
    ];
    return view('welcome', $variables);
});

Route::get('/kontakty', function () {
    return view('contact');
})->name('contactRoute');

Route::get('/pacienti', function () {
    $data = DB::table('patient')->where('age', '>', 30)->get();
    //dd($data);
    return view('patients', ['patients' => $data]);
})->name('patientsRoute');

Route::get('/pacient/{id}', function ($id) {
    $data = DB::table('patient')->find($id);
    //dd($data);
    return view('patients', ['patient' => $data]);
})->name('patientsRoute');