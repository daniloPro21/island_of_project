<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfilRequest;
use Illuminate\Http\Request;

class ProfilController extends Controller
{

        public function store(ProfilRequest $request){

            auth()->user()->profile()->create([
                'adresse' => $request->get('adresse'),
                'phone' => $request->get('phone'),
            ]);
        return redirect()->route('Acceuil');
        }

        public function create(){
            return view('island.Editer-son-profil');
        }


}
