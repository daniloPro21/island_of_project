<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfilRequest;
use App\Http\Requests\ProjectRequest;
use App\Profil;
use App\Projets;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProjetController extends Controller
{
    public function index(){

        $p = DB::table('projets')
            ->join('users', 'users.id', '=', 'projets.user_id')
            ->join('profils', 'profils.user_id', '=', 'users.id')->paginate('3');
        $covid = DB::table('projets')
            ->join('users', 'users.id', '=', 'projets.user_id')
            ->join('profils', 'profils.user_id', '=', 'users.id')
            ->where('projets.categorie', '=' , 'covid19')->paginate('3');

        return view('Island.Acceuil', compact('p', 'covid'));
    }

    public function view(Projets $projet) {

        return view('Island.Details-Projets', ['projet' => $projet]);
    }

    public function create(){

        return view('Island.Soumettre-son-projet');
    }

    public function store(ProjectRequest $request){

        $titre = $request->get('titre');
        $equipe = $request->file('equipes');
        $a = \request()->file('logo');
        $filenames = uniqid().'-'.$a->getClientOriginalName();
        $a->move(public_path().'/uploads/',$filenames);
        $fa = array();
        foreach ($equipe as $c){
            $filename = uniqid().'-'.$c->getClientOriginalName();
            array_push($fa, $filename);
            $c->move(public_path()."/uploads/$titre", $filename);
        }

        auth()->user()->projet()->create([
            'logo' => $filenames,
            'titre' => $request->get('titre'),
            'solution' => $request->get('solution'),
            'dure' => $request->get('dure'),
            'description' => $request->get('description'),
            'probleme' => $request->get('probleme'),
            'stade' => $request->get('stade'),
            'nature' => $request->get('nature'),
            'site' => $request->get('site'),
            'categorie' => $request->get('categorie'),
            'video' => $request->get('video'),
            'equipes' => serialize($fa),
        ]);

        return redirect()->route('voir');
    }


    public function voir(){
        $t = DB::table('projets')
            ->join('users', 'users.id', '=', 'projets.user_id')
            ->join('profils', 'profils.user_id', '=', 'users.id')
            ->get();

        return view('Island.touts-les-projets', compact('t'));
    }

    public function show(Projets $projets){

        $user = Profil::all()->where('user_id', '=', $projets->user_id);
        $increment = DB::table('projets')->whereId($projets->id)->increment('nbr');

        return view('Island.Details-Projets')->with(['projets' => $projets, 'user' => $user]);
    }

    public function showByCategorie(String $categorie){

        $t = DB::table('projets')
            ->join('users', 'users.id', '=', 'projets.user_id')
            ->join('profils', 'profils.user_id', '=', 'users.id')
            ->where('projets.categorie', '=', $categorie)
            ->get();

        return view('Island.categorie', compact('t', 'categorie'));
    }


}
