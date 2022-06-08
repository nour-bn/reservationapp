<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\roomamphi;
use App\Models\roomamphitype;
use App\Models\material;
use Illuminate\Support\Facades\DB;

class RoomAmphis extends Controller
{
    //
    public function show()
    {
        $roomamphi = DB::table('roomamphis')
            ->join('roomamphitypes', 'roomamphis.idroomamphitype', '=', 'roomamphitypes.idroomamphitype')
            ->join('materials', 'roomamphis.idmaterial', '=', 'materials.idmaterial')
            ->select('roomamphis.*', 'roomamphitypes.type','materials.Type')
            ->get();
        $roomamphitype = DB::table('roomamphitypes')
            ->select('roomamphitypes.idroomamphitype','roomamphitypes.type')
            ->get();
        $material = DB::table('materials')
            ->select('materials.idmaterial','materials.Type')
            ->get();
        return view('PageAdmin.RoomAmphi',compact('roomamphi','roomamphitype','material'));
    }
    public  function index() {
        return view('PageAdmin.form');
    }
    public  function create( Request $request) {
        $roomamphi= new roomamphi();
        $roomamphi->idroomamphitype= $request['types'];
        $roomamphi->idmaterial= $request['material'];
        $roomamphi -> num = $request['num'];
        $roomamphi ->floor  = $request['floor'];
        $roomamphi ->capacity = $request['capacity'];
        $roomamphi->save();

        return redirect()->route('RoomAmphii');
    }
    public  function update(Request $request,$idroomamphi) {

        $roomamphi=roomamphi::find($idroomamphi);
        $roomamphi->update(array('idroomamphitype'=>$request['types'],'idmaterial'=>$request['material'],'num'=>$request['num'],
            'floor'=>$request['floor'],'capacity'=>$request['capacity']));

        $roomamphitype = DB::table('roomamphitypes')
            ->select('roomamphitypes.type')
            ->get();
        $material = DB::table('materials')
            ->select('materials.Type')
            ->get();



        /*return redirect('Teachers')->with('status','Teacher data update Successfully')*/;
        return redirect()->route('RoomAmphii',compact('roomamphitype','material'));
    }

    public function destroy($id)
    {
        $roomamphi=roomamphi::find($id);
        $roomamphi->delete();
        /*return redirect('Teachers')->with('status','Teacher data update Successfully')*/;
        return redirect()->route('RoomAmphii');

    }
}


