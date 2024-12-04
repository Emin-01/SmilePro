<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;


class AppointmentController extends Controller
{

    public function index()
    {
        $appointments = auth()->user()->appointments; 
        return view('appointments.index', compact('appointments'));
    }


    public function create()
    {
        // Retourneer een view voor het maken van een nieuwe afspraak
        return view('appointments.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'appointment_date' => 'required|date',
        ]);

        auth()->user()->appointments()->create([
            'description' => $request->description,
            'appointment_date' => $request->appointment_date,
        ]);

        return redirect()->route('appointments.index')->with('success', 'Afspraak succesvol aangemaakt!');
    }
}
