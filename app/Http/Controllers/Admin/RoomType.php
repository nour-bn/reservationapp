<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\roomamphitype;

class RoomType extends Controller
{
    //

        public function show()
        {
            $RoomType = roomamphitype ::all();
            return view('PageAdmin.RommType',['RoomType' => $RoomType]);
        }
   /* public  function index() {
        return view('PageAdmin.form');
    }*/
    public  function create( Request $request) {
        $request->validate([
            'type' => 'required'
        ]);

        roomamphitype::create($request->all());

        return redirect()->route('RoomType');
    }

    public  function update(Request $request,$id) {

        $RoomType=roomamphitype::find($id);

        $request->validate([
            'type' => 'required',
        ]);

        $RoomType->update($request->all());
        /*return redirect('Teachers')->with('status','Teacher data update Successfully')*/;
        return redirect()->route('RoomType');
    }

    public function destroy($id)
    {
        $RoomType=roomamphitype::find($id);
        $RoomType->delete();
        /*return redirect('Teachers')->with('status','Teacher data update Successfully')*/;
        return redirect()->route('RoomType');
    }

}
