<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\material;

class Materials extends Controller
{
    //
    public  function show() {
        $Materials = material::all();
        return view('PageAdmin.Materials',['Materials'=>$Materials]);
    }
    public  function index() {
        return view('PageAdmin.form');
    }
    public  function create( Request $request) {
        $request->validate([
            'numser' => 'required',
            'specs' => 'required',
            'state' => 'required',
            'type'=> 'required'
        ]);

        material::create($request->all());

        return redirect()->route('Materials');
    }

    public  function edit($idmaterial) {
        $Materials=material::find($idmaterial);
        return view('PageAdmin.edit-mat',['Materials'=>$Materials]);

    }
    public  function update(Request $request,$idmaterial) {
        $Materials=material::find($idmaterial);

        $request->validate([
            'numser' => 'required',
            'specs' => 'required',
            'state' => 'required',
            'Type'=> 'required'
        ]);

        $Materials->update($request->all());
        /*return redirect('Teachers')->with('status','Teacher data update Successfully')*/;
        return redirect()->route('Materials');
    }

    public function destroy($id)
    {

        $Materials=material::find($id);
        $Materials->delete();
        /*return redirect('Teachers')->with('status','Teacher data update Successfully')*/;
        return redirect()->route('Materials');


    }
}
