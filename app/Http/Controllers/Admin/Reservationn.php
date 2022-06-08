<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\reservation;
use App\Models\teacher;
use App\Models\roomamphi ;
use App\Models\slot;

class Reservationn extends Controller
{
    //

    public  function show() {

        $reservation['reservation'] = DB::table('reservations')
            ->select('reservations.idreservation','reservations.dateres', 'teachers.lname','teachers.fname','slots.start_time','slots.end_time','roomamphis.num')
            ->leftJoin('teachers', 'reservations.idteacher', '=', 'teachers.idteacher')
            ->leftJoin('roomamphis', 'reservations.idroomamphi', '=', 'roomamphis.idroomamphi')
            ->leftJoin('slots', 'reservations.idslot', '=', 'slots.idslot')
            ->get();

        return view('PageAdmin.Reservation')->with($reservation);
    }

    public  function update(Request $request,$idreservation) {

        $reservation=roomamphi::find($idreservation);
        $reservation->dateres=$request->input('Date');

        $reservation->teacher()->saveMany([new teacher(['lname'=>$request->input('lastName')]),new teacher(['fname'=>$request->input('firstName')])]);
        $reservation->roomamphi()->saveMany([new roomamphi(['num'=>$request->input('num')])]);
        $reservation->slot()->saveMany([new slot(['start_time'=>$request->input('time')]),new slot(['end_time'=>$request->input('time')])]);




        $reservation->update();
        /*return redirect('Teachers')->with('status','Teacher data update Successfully')*/;
        return redirect()->route('Reservationn');
    }



    public function destroy($id)
    {
        $reservation=reservation::find($id);
        $reservation->delete();
        /*return redirect('Teachers')->with('status','Teacher data update Successfully')*/;
        return redirect()->route('Reservationn');
    }
}
