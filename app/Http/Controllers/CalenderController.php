<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CrudEvents;
class CalenderController extends Controller
{
    public function event()
    {
        $event=CrudEvents::select('fecha')->where('estado','available')->groupBy('fecha')->get();

        $data=array();
        foreach($event as $row){
            $data[] = array(
                'id'=> $row["id"],
                'title'=> "",
                'start' => $row["fecha"],
                'end'=> $row["fecha"]
            );
        }
        return response()->json($data);
    }
 
    public function calendarEvents(Request $request)
    {
 
        switch ($request->type) {
           case 'showHours':
              $event = CrudEvents::where([
                  ['fecha', '=', $request->get('fecha')],
                  ['estado', '=', 'available'],
              ]);
 
             $horas=array();

             foreach($event as $row){
                $horas[] = array(
                    'id' => $row->id,
                    'hora' => date('H:i', strtotime($row->hora)),
                );
             }

             return response()->json($horas);
             break;
        }
    }
}