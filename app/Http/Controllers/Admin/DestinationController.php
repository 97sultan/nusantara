<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Destination,Province};
use App\Http\Requests\StoreDestinationRequest;
use App\Http\Requests\UpdateDestinationRequest;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class DestinationController extends Controller
{

    public function index()
    {
        $destination = Destination::latest()->get();
        
        return view('admin.destination.index', [
            'destination' => $destination,
        ]);
    }

    public function create()
    {
        $action = 'add';
        $combo = $this->combo();

        return view('admin.destination.save', [
            'action' => $action,
            'combo' => $combo,
        ]);
    }

    public function store(StoreDestinationRequest $request)
    {
        $image = $request->file('image');

        $filename='';
        if ($image != '') {
            $filename = uniqid().$image->getClientOriginalName();
        }

        $insert = $request->all();
        $insert['address'] = $insert['address'] ?? '';
        $insert['slug'] = Str::slug($insert['name'], '-');
        $insert['image'] = $filename;

        Destination::create($insert);

        // PROSES UPLOAD
        if ($image != '') {
            $path = 'uploads/destination/';
            $image->move($path,$filename);
        }

        return redirect()->route('destination.index');
    }

    public function show(Destination $destination)
    {
        //
    }

    public function edit(Destination $destination)
    {
        $action = 'edit';
        $combo = $this->combo();

        return view('admin.destination.save',[
            'action' => $action,
            'row' => $destination,
            'combo' => $combo,
        ]);
    }

    public function update(UpdateDestinationRequest $request, Destination $destination)
    {
        $image = $request->file('image');
        $filename = $destination->image;
        $imageOld = $destination->image;

        if ($image != '') {
            $filename = uniqid().$image->getClientOriginalName();
        } 

        $update = $request->all();
        $update['address'] = $update['address'] ?? '';
        $update['slug'] = Str::slug($update['name'], '-');
        $update['image'] = $filename;

        $destination->update($update);

        // PROSES UPLOAD
        if ($image != '') {
            $path = 'uploads/destination/';
            $image->move($path,$filename);

            File::delete($path.$imageOld);
        }

        return redirect()->route('destination.index');
    }

    public function destroy(Destination $destination)
    {
        $image = $destination->image;

        $destination->delete();
        File::delete('uploads/destination/'.$destination->image);
        
        return redirect()->route('destination.index');
    }

    private function combo() {
        $provinsi = Province::whereIn('id',[11,12,13,14])->get();

        return [
            'provinsi' => $provinsi,
        ];

    }

}
