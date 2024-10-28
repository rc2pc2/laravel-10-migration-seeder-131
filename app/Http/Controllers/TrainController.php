<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //

    public function index(){
        $trains = Train::all();
        return view("trains.index", compact("trains"));
    }

    public function todayIndex(){
        $trains = Train::where("departure_date", now()->toDateString())->get();
        return view("trains.index", compact("trains"));
    }
}
