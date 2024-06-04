<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use App\Models\Obats;
use App\Models\Appointments;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function pharmacy(){
        $obat = Obats::all();
        return view('pharmacy',['obat' => $obat]);
    }

    public function appointment(){
        $doc = Doctors::all();
        return view('appointment',['doc' => $doc]);
    }

    public function show($id){
        $doc = Doctors::find($id);
        return view('doctor',['doc' => $doc]);
    }

    public function chat(){
        return view('chat');
    }

    public function history(){
        $app = Appointments::all();
        $doc = Doctors::all();
        return view('history',['app' => $app, 'doc' => $doc]);
    }

    public function faq(){
        return view('faq');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'doctor_id' => '',
            'date' => ['not_in:--', 'nullable'],
            'time' => ['not_in:--', 'nullable']
        ]);

        // dump($request);
        dump($validateData);

        $appointment = new Appointments();
        $appointment->doctor_id = $validateData['doctor_id'];
        $appointment->date = $validateData['date'];
        $appointment->time = $validateData['time'];
        $appointment->save();

        return redirect()->route('home'); 
    }
}
