<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfilRequest;
use App\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth'=> 'verified']);
    }
        public function store(ProfilRequest $request){

                $pro = Profil::all()->where('user_id', '=', auth()->user()->id)->first();
                    if($pro){
                        auth()->user()->profile()->update([
                            'adresse' => $request->get('adresse'),
                            'phone' => $request->get('phone'),
                        ]);
                        return redirect()->route('Acceuil')->with('success', 'Profil mis a jour');
                    }else{
                        auth()->user()->profile()->create([
                            'adresse' => $request->get('adresse'),
                            'phone' => $request->get('phone'),
                        ]);
                        return redirect()->route('Acceuil')->with('success', 'Profil cree');
                    }

        }

        public function reset() {
            return view('Island.Reset-Password');
        }


}
