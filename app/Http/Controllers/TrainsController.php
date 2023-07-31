<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

use Carbon\Carbon;

class TrainsController extends Controller
{
    public function index(Request $request){
        $trains = Train::all();
        return view('welcome', compact('trains'));
    }

    public function filtrato(Request $request){
        $trains = Train::where('data_partenza', '>=',$request->input('chosenDate'))->get();
        return view('welcome', compact('trains'));
    }

}
