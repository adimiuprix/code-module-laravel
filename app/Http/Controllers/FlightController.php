<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index(){
        return view('eloquent.index');
    }

    public function All(){
        foreach (Flight::all() as $flight) {
            echo $flight->name;
        }

        return view('eloquent.all');
    }

    public function BuildQueest(){
        $flights = Flight::where('active', 1)
        ->orderBy('name')
        ->take(10)
        ->get();

        return view('eloquent.all');
    }

    public function Refresh(){
        $flight = Flight::where('number', 'DF-449F')->first();
        $flight->fresh();

        // Menampilkan data dengan key 1
        $flight = Flight::find(1);

        // Retrieve the first model matching the query constraints...
        $flight = Flight::where('active', 1)->first();

        // Alternative to retrieving the first model matching the query constraints...
        $flight = Flight::firstWhere('active', 1);
    }

    public function TemukanAtauGagal(){
        $flight = Flight::findOrFail(1);

        dd($flight);
    }

    // Memeasukkan catatan
    public function store(Request $request): RedirectResponse
    {
        // Validasi pemintaan
        $flight = new Flight;
        $flight->name = $request->name;
        $flight->save();

        return redirect('eloquent.index');
    }
}
