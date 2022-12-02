<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\{DashboardController,CarController,DestinationController,SliderController};
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Http\Request;
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

Route::get('/kabupaten/{id}', function (Request $request,$id) {
    $kabupaten = \App\Models\Regency::where("province_id",$id);

    if ($id == 12) {
        if ($request->type == 'true') {
            $kabupaten->where('id','!=',1275);
        }
    }
    
    return response()->json($kabupaten->get());
});

Route::get('/kecamatan/{id}', function ($id) {
    $kabupaten = \App\Models\District::where("regency_id",$id)->get();
    return response()->json($kabupaten);
});

Route::get('/kelurahan/{id}', function ($id) {
    $kelurahan = \App\Models\Village::where("district_id",$id)->get();
    return response()->json($kelurahan);
});


Route::get('/price', function (Request $request) {
    $dari = $request->dari;
    $sampai = $request->sampai;
    $destination = $request->destination;
    $type = $request->type;

    if ($type == 'rent') {
        if ($dari > $sampai) {
            return redirect()->back()->withErrors('Dates must true');
        }
    }

    if ($destination == '') {
        return redirect()->back()->withErrors('Destination are required');
    }

    $arr = explode(' - ',$request->destination);

    $townType = 'out';
    if (strtoupper($arr[1]) == 'KOTA MEDAN') {
        $townType = 'in';
    }

    $car = \App\Models\Car::all();

    $datetime1 = new DateTime($dari);
    $datetime2 = new DateTime($sampai);
    $difference = $datetime1->diff($datetime2);
    $day = $difference->d+1;
    
    return view('price',[
        'car' => $car,
        'day' => $day,
        'townType' => $townType
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/destination/{slug?}', function ($slug = '') {
    if ($slug == '') {
        $destination = \App\Models\Destination::latest()->get();

        return view('destination',[
            'destination' => $destination
        ]);

    } else {
        $row = \App\Models\Destination::where('slug',$slug)->first();

        return view('destination-detail',[
            'row' => $row
        ]);
    }

});

Auth::routes([
    // 'reset' => false
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
