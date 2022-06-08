<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\slot;


class stats extends Controller
{
    //
    public  function show() {
        $stats = slot::all();
        return view('PageAdmin.stats',['stats'=>$stats]);
    }
    public  function index() {
        return view('PageAdmin.form');
    }
    public  function create( Request $request) {
        $request->validate([
            'start_time' => 'required',
            'end_time' => 'required'
        ]);

        slot::create($request->all());

        return redirect()->route('stats');
    }

    public  function edit($idslot) {
        $stats=slot::find($idslot);
        return view('PageAdmin.edit-slot',['stats'=>$stats]);
    }

    public  function update(Request $request,$idslot) {
        $stats=slot::find($idslot);

        $request->validate([
            'start_time' => 'required',
            'end_time' => 'required'
        ]);
        /*return redirect('Teachers')->with('status','Teacher data update Successfully')*/;
        $stats->update($request->all());
        return redirect()->route('stats');
    }

    public function destroy($id)
    {

        $stats=slot::find($id);
        $stats->delete();
        return redirect()->route('stats');


    }
}
