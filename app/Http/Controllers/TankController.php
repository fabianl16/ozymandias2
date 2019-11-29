<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\Request;
use App\Tank;
use Carbon\Carbon;
use App\Charts\LineChart;
class TankController extends Controller
{
     public function show()
    {
    	$chart = new LineChart;
        $chart->labels(['One', 'Two', 'Three']);
        $chart->dataset('My dataset 1', 'line', [1, 2, 3]);


        return view('welcome', compact('chart'));

    }


    public function store(Request $request)
    {


    	if($request->isJson()){
		$monitoring = new Tank;
        $monitoring->temperature = $request->temperature;
        $monitoring->ph = $request->ph;
        $monitoring->flujo = $request->flujo;
        $monitoring->salinidad = $request->salinidad;
        $monitoring->save();
        return response()->json(['OK'], 200);

    	}
    	return response()->json(['No autorizado'], 401);
       


    }

    public function index()
    {
        $testMonitor= Tank::whereDate('created_at', '=', Carbon::now()->format('Y-m-d'))->get(); 
        $ttp =  Tank::latest()->take(5)->get();
        $charttemp = new LineChart;

        $charttemp->labels(['1', '2', '3', 'Four', 'Five']);
        $charttemp->dataset('Temperatura', 'line', [31.4, 23.5, 32.2]);

        return view('welcome', compact('testMonitor','charttemp'));
    }

    public function calculate(){

                $input = request()->all();

        return response()->json(['success'=>'Got Simple Ajax Request.']);
           
    }

}
