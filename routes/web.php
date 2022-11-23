<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\{DashboardController,CarController,DestinationController,SliderController};
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
// $role = Role::create(['name' => 'admin']);

Route::get('/', function () {
    $provinsi = \App\Models\Province::whereIn('id',[11,12,13,14])->get();
    $destination = \App\Models\Destination::latest()->get();
    $slider = \App\Models\Slider::latest()->get();

    return view('index',[
        'provinsi' => $provinsi,
        'destination' => $destination,
        'slider' => $slider,
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

Route::get('/kelurahan/{id}', function ($id) {
    $kelurahan = \App\Models\Village::where("district_id",$id)->get();
    return response()->json($kelurahan);
});


Route::get('/price', function () {
    return view('price');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/destination/{slug}', function ($slug = '') {
    $all = \App\Models\Destination::all();

    foreach ($all as $item) {
        $d = \App\Models\Destination::find($item->id);
        $d->slug = Illuminate\Support\Str::slug($item->name, '-');
        $d->save();
    }

    if ($slug == '') {
        return view('destination');
    } else {
        $row = \App\Models\Destination::where('slug',$slug)->first();

        return view('destination-detail',[
            'row' => $row
        ]);
    }

});

Auth::routes([
    'reset' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'dashboard']);
    Route::match(['get','post'],'/content', [DashboardController::class,'content']);

    Route::resources([
        'car' => CarController::class,
        'destination' => DestinationController::class,
        'slider' => SliderController::class,
    ]);

    Route::match(['get', 'post'], '/user/changepassword', [DashboardController::class,'changepassword']);
});
