<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Option;

class DashboardController extends Controller
{
    
    public function dashboard() {
        return view('admin.dashboard');
    }

    public function content(Request $request) {
        if ($request->isMethod('post')) {
            $update = $request->all();
            unset($update['_token']);
            
            foreach ($update as $key => $value) {
                Option::where('name', $key)->update(['value' => $value ?? '']);
            }

            return back()->with("success", "Berhasil Update");
        } else {
            $option = new Option();
            $row = [
                'name' => $option->where('name','name')->first()->value,
                'phone' => $option->where('name','phone')->first()->value,
                'wa' => $option->where('name','wa')->first()->value,
                'email' => $option->where('name','email')->first()->value,
                'instagram' => $option->where('name','instagram')->first()->value,
                'facebook' => $option->where('name','facebook')->first()->value,
            ];

            return view('admin.content',['row' => $row]);
        }
    }

    public function changepassword(Request $request) 
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'old_password' => 'required',
                'new_password' => 'required|confirmed',
            ]);

            if(!Hash::check($request->old_password, auth()->user()->password)){
                return back()->with("error", "Password Lama Tidak Sama");
            }


            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password)
            ]);

            return back()->with("success", "Password berhasil diubah!");

        } else {
            return view('admin.changepassword');
        }
    }
    
}
