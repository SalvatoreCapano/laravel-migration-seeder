<?php

namespace App\Http\Controllers\Trains;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Train;

class TrainController extends Controller
{
    public function index() {
        // $trains = Train::all();
        $trains = Train::where('departure_date', '=', Carbon::today())->get();
        return view ('homepage', compact('trains'));
    }
}