<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;

use Illuminate\Support\Facades\File;

class CarController extends Controller
{

    public function index()
    {
        $car = Car::latest()->get();
        
        return view('admin.car.index', [
            'car' => $car,
        ]);
    }

    public function create()
    {
        $action = 'add';

        return view('admin.car.save', [
            'action' => $action
        ]);
    }


    public function store(StoreCarRequest $request)
    {
        $image = $request->file('image');

        $filename='';
        if ($image != '') {
            $filename = uniqid().$image->getClientOriginalName();
        }

        $insert = $request->all();
        $insert['price_in'] = $this->removeSeparator($insert['price_in']);
        $insert['price_out'] = $this->removeSeparator($insert['price_out']);
        $insert['image'] = $filename;

        Car::create($insert);

        // PROSES UPLOAD
        if ($image != '') {
            $path = 'uploads/car/';
            $image->move($path,$filename);
        }

        return redirect()->route('car.index');
    }

    public function show(Car $car)
    {
        //
    }

    public function edit(Car $car)
    {
        $action = 'edit';

        return view('admin.car.save',[
            'action' => $action,
            'row' => $car,
        ]);
    }

    public function update(UpdateCarRequest $request, Car $car)
    {
        $image = $request->file('image');
        $filename = $car->image;
        $imageOld = $car->image;

        if ($image != '') {
            $filename = uniqid().$image->getClientOriginalName();
        } 

        $update = $request->all();
        $update['price_in'] = $this->removeSeparator($update['price_in']);
        $update['price_out'] = $this->removeSeparator($update['price_out']);
        $update['image'] = $filename;

        $car->update($update);

        // PROSES UPLOAD
        if ($image != '') {
            $path = 'uploads/car/';
            $image->move($path,$filename);

            File::delete($path.$imageOld);
        }

        return redirect()->route('car.index');
    }

    public function destroy(Car $car)
    {
        $image = $car->image;

        $car->delete();
        File::delete('uploads/car/'.$car->image);
        
        return redirect()->route('car.index');
    }
}
