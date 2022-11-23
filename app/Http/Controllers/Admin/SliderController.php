<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;

use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
   public function index()
    {
        $slider = Slider::latest()->get();
        
        return view('admin.slider.index', [
            'slider' => $slider,
        ]);
    }

    public function create()
    {
        $action = 'add';

        return view('admin.slider.save', [
            'action' => $action,
        ]);
    }

    public function store(StoreSliderRequest $request)
    {
        $image = $request->file('image');

        $filename='';
        if ($image != '') {
            $filename = uniqid().$image->getClientOriginalName();
        }

        $insert = $request->all();
        $insert['image'] = $filename;

        Slider::create($insert);

        // PROSES UPLOAD
        if ($image != '') {
            $path = 'uploads/slider/';
            $image->move($path,$filename);
        }

        return redirect()->route('slider.index');
    }

    public function show(Slider $slider)
    {
        //
    }

    public function edit(Slider $slider)
    {
        $action = 'edit';

        return view('admin.slider.save',[
            'action' => $action,
            'row' => $slider,
        ]);
    }

    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        $image = $request->file('image');
        $filename = $slider->image;
        $imageOld = $slider->image;

        if ($image != '') {
            $filename = uniqid().$image->getClientOriginalName();
        } 

        $update = $request->all();
        $update['image'] = $filename;

        $slider->update($update);

        // PROSES UPLOAD
        if ($image != '') {
            $path = 'uploads/slider/';
            $image->move($path,$filename);

            File::delete($path.$imageOld);
        }

        return redirect()->route('slider.index');
    }

    public function destroy(Slider $slider)
    {
        $image = $slider->image;

        $slider->delete();
        File::delete('uploads/slider/'.$slider->image);
        
        return redirect()->route('slider.index');
    }
}
