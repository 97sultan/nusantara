<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    $provinsi = \App\Models\Province::whereIn('id',[11,12,13,14])->get();
    return view('index',[
        'provinsi' => $provinsi
    ]);
});

// Route::get('/kecamatan/{}', HomeController::class,'kecamatan');

Route::get('/kabupaten/{id}', function ($id) {
    $kabupaten = \App\Models\Regency::where("province_id",$id)->get();
    return response()->json($kabupaten);
});

Route::get('/kecamatan/{id}', function ($id) {
    $kabupaten = \App\Models\District::where("regency_id",$id)->get();
    return response()->json($kabupaten);
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/artikel', function () {
    return view('artikel');
});
Auth::routes([
    'reset' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
