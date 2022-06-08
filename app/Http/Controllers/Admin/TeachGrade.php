<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\grade;

class TeachGrade extends Controller
{
    //

    public  function show() {
        $TeachGrade = grade::all();
        return view('PageAdmin.TeaGrade',['TeachGrade'=>$TeachGrade]);
    }
    public  function index() {
        return view('PageAdmin.form');
    }
    public  function create( Request $request) {
        $request->validate([
            'grade' => 'required'
        ]);

        grade::create($request->all());

        return redirect()->route('TeachGrade');
    }

    public  function edit(grade $TeachGrade) {
        return view('PageAdmin.edit-grade',compact('TeachGrade'));

    }
    public  function update(Request $request,$idgrade) {

        $TeachGrade=grade::find($idgrade);

        $request->validate([
            'grade' => 'required'
        ]);

        $TeachGrade->update($request->all());
        /*return redirect('Teachers')->with('status','Teacher data update Successfully')*/;
        return redirect()->route('TeachGrade');
    }

    public function destroy($id)
    {
        $TeachGrade=grade::find($id);
        $TeachGrade->delete();
        /*return redirect('Teachers')->with('status','Teacher data update Successfully')*/;
        return redirect()->route('TeachGrade');
    }
}
