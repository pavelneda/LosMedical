<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use Illuminate\Support\Facades\Mail;
use App\Mail\NumberMail;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main($lang = null){
        if ($lang === 'ru'){
            return view('ru.main');
        }else{
            return view('main');
        }
    }

    public function doctors($lang = null){
        if ($lang === 'ru'){
            return view('ru.doctors', ['doctors' => Doctors::all()]);
        }else{
            return view('doctors', ['doctors' => Doctors::all()]);
        }
    }

    public function contacts($lang = null){
        if ($lang === 'ru'){
            return view('ru.contacts');
        }else{
            return view('contacts');
        }
    }


    public function callform(Request $request){


        $validation = $request->validate([
           'number' => 'required'
        ]);

        $toEmail = "losmedical3@gmail.com";
        Mail::to($toEmail)->send(new NumberMail($request->number));

        return redirect($request->server('HTTP_REFERER'))->with('success' , 'Number sent successfully');


    }
}
