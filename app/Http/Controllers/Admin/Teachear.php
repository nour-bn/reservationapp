<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\teacher;
use App\Models\grade;



class Teachear extends Controller
{
    //
    public  function show() {
        $teacher = teacher::with('grade')->get();
        $grade = grade::with('teacher')->get();
         return view('PageAdmin.Teachers',compact('teacher','grade'));

    }

    public  function index() {
        return view('PageAdmin.form');
    }
    public  function create( Request $request) {
        $teacher= new teacher();
        $teacher ->grade_idgrade= $request['grades'];
        $teacher -> fname = $request['fname'];
        $teacher ->lname  = $request['lname'];
        $teacher ->department = $request['department'];
         $teacher -> numtel  = $request['numtel'];
        $teacher -> email = $request['email'];
        $teacher -> password  = $request['password'];
        $teacher ->state  = $request['state'];
        $teacher -> status = $request['status'];
        $teacher->save();


        return redirect()->route('Teachers');
    }



    public  function edit($idteacher) {
        $teacher=teacher::find($idteacher);
        return view('PageAdmin.edit',['teacher'=>$teacher]);

    }

    public  function update(Request $request,$idteacher) {
        $teacher=teacher::find($idteacher);

        $request->validate([
        'fname' => 'required',
        'lname' => 'required',
        'department' => 'required',
        'numtel'=> 'required',
        'email' => 'required',
        'password' => 'required',
        'state' => 'required',
        'status'=> 'required',

        ]);

        $teacher->update($request->all());
        /*return redirect('Teachers')->with('status','Teacher data update Successfully')*/;
        return redirect()->route('Teachers');
    }

    public function destroy($id)
    {
        $teacher=teacher::find($id);
        $teacher->delete();
        /*return redirect('Teachers')->with('status','Teacher data update Successfully')*/;
        return redirect()->route('Teachers');


    }
}
