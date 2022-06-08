<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\padmin;

class AdminPer extends Controller
{
    //
    public  function show() {
        $AdminPer = padmin::all();
        return view('PageAdmin.AdminPers',['AdminPer'=>$AdminPer]);
    }
    /*public  function index() {
        return view('PageAdmin.form');
    }*/
    public  function create( Request $request) {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'password'=> 'required'
        ]);

        padmin::create($request->all());

        return redirect()->route('AdminPer');
    }

    public  function edit($idpadmin) {
        $padmin=padmin::find($idpadmin);
        return view('PageAdmin.edit-peradm',['padmin'=>$padmin]);


    }
    public  function update(Request $request, $idpadmin) {
        $AdminPer=padmin::find($idpadmin);

        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'password'=> 'required'
        ]);

        $AdminPer->update($request->all());
        /*return redirect('Teachers')->with('status','Teacher data update Successfully')*/;
        return redirect()->route('AdminPer');
    }

    public function destroy($id)
    {
        $AdminPer=padmin::find($id);
        $AdminPer->delete();
        /*return redirect('Teachers')->with('status','Teacher data update Successfully')*/;
        return redirect()->route('AdminPer');
    }
}
