<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\indexmodel;

class indexcon extends Controller
{

    public function view(){
        $showformdata = indexmodel::all();
        return view('index',[
         'showformdata' => $showformdata
    ]);
    }

    public function editform($id){
        $editform = indexmodel::where('id', $id)->findorFail($id);
        return view('edit', [
            'editform' => $editform
        ]);

    }

    public function updateform(Request $request, $id){
        $request -> validate([
            'email' => 'required|string|min:3',
           
        ]);

        $edit = indexmodel::findorFail($id);
        
        $edit->email = $request->email;

        $edit->save();
        
        

        return redirect () ->route('index')->with('Success','Done');
    }


    public function store(Request $request){
        $request -> validate([
            'email' => 'required|string|min:3',
            'password' => 'required|string|min:3',
            'address1' => 'required|string|min:3',
            'address2' => 'required|string|min:3',
            'city' => 'required|string|min:3',
            'zipcode' => 'required|string|min:3',
            'phone' => 'required|string|min:3',
            'age' => 'required|string|min:3',
            'country' => 'required|string|min:3',
        ]);
        indexmodel::create([
            'email' => $request->email,
            'password' => $request->password,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'city' => $request->city,
            'zipcode' => $request->zipcode,
            'phone' => $request->phone,
            'age' => $request->age,
            'country' => $request->country,
        ]);
        return redirect () ->route('index')->with('Success','Done');
    }
}
