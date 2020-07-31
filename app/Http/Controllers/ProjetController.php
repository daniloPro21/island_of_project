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
use RealRashid\SweetAlert\Facades\Alert;

class ProjetController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth'=> 'verified']);
    }

    public function index(){

        $p = DB::table('projets')
            ->join('users', 'projets.user_id', '=', 'users.id')
            ->join('profils', 'profils.user_id', '=', 'users.id')
            ->select('projets.id', 'projets.logo', 'projets.categorie', 'projets.description', 'projets.titre',
                'projets.site', 'projets.video','projets.nbr', 'projets.equipes', 'users.name', 'profils.adresse', 'projets.stade', 'projets.nature'
            )
            ->orderBy('projets.id', 'desc')
            ->take(3)
        ->get();
        $covid = DB::table('projets')
            ->join('users', 'users.id', '=', 'projets.user_id')
            ->join('profils', 'profils.user_id', '=', 'users.id')
            ->select('projets.id', 'projets.logo', 'projets.categorie', 'projets.description', 'projets.titre',
                'projets.site', 'projets.video','projets.nbr', 'projets.equipes', 'users.name', 'profils.adresse', 'projets.stade', 'projets.nature'
            )
            ->where('projets.categorie', '=' , 'covid19')
            ->orderBy('projets.id', 'desc')->take(3)
            ->get();
        $t = Projets::all()->where('categorie', '=', 'covid19')->count();

        return view('Island.Acceuil', compact('p', 'covid', 't'));
    }

    public function covid19(){
        $t =  DB::table('projets')
            ->join('users', 'users.id', '=', 'projets.user_id')
            ->join('profils', 'profils.user_id', '=', 'users.id')
            ->select('projets.id', 'projets.logo', 'projets.categorie', 'projets.description', 'projets.titre',
                'projets.site', 'projets.video','projets.nbr', 'projets.equipes', 'users.name', 'profils.adresse', 'projets.stade', 'projets.nature'
            )
            ->where('projets.categorie', '=' , 'covid19')
            ->orderBy('projets.id', 'desc')->paginate(6);


        return view('Island.les-projets-covid', compact('t'));
    }

    public function view(Projets $projet) {

        return view('Island.Details-Projets', ['projet' => $projet]);
    }

    public function create(){

        $pro = Profil::all()->where('user_id', '=', auth()->user()->id)->first();

        if ($pro){
            return view('Island.Soumettre-son-projet');
        }else{
            return redirect()->route('editer')->with('warning', 'editer votre profil avant d\'uploder votre projet');
        }
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
            $pro = Profil::all()->where('user_id', ' =', auth()->user()->id)->first();
            if($pro){
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
                 return redirect()->route('voir')->with('success','Projet Ajouter avec success');
            }else{
                return  redirect()->route('editer')->with('warning', 'Veuillez editer votre profile Avamt de soumettre un projets');
            }
    }


    public function voir(){
        $t = DB::table('projets')
            ->join('users', 'projets.user_id', '=', 'users.id')
            ->join('profils', 'profils.user_id', '=', 'users.id')
            ->select('projets.id', 'projets.logo', 'projets.categorie', 'projets.description', 'projets.titre',
                'projets.site', 'projets.video','projets.nbr', 'projets.equipes', 'users.name', 'profils.adresse', 'projets.stade', 'projets.nature'
            )
            ->orderBy('projets.id', 'desc')
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


    public function covid(){
        return view('Island.covid');
    }

    public function carte(){
        return view('Island.Voir-sur-la-carte');
    }

    public function editer(){
        return view('island.Editer-son-profil');
    }


    public function userproject(){

        $p = DB::table('projets')
            ->join('users', 'projets.user_id', '=', 'users.id')
            ->join('profils', 'profils.user_id', '=', 'users.id')
            ->select('projets.id', 'projets.logo', 'projets.categorie', 'projets.description', 'projets.titre',
                'projets.site', 'projets.video','projets.nbr', 'projets.equipes', 'users.name', 'profils.adresse', 'projets.stade', 'projets.nature'
            )
            ->where('projets.user_id', '=', auth()->user()->id)
            ->orderBy('projets.id', 'desc')
            ->get();

        return view('Island.projets_user', compact('p'));
    }

    public function edit(Projets $projets){
        //dd($projets);
        return view('Island.update-son-projet', compact('projets'));
    }

    public  function update(ProjectRequest $request, Projets $projets){

       // dd($request->all());
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
        $pro = Profil::all()->where('user_id', ' =', auth()->user()->id)->first();
        if($pro){
            $data = [
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
            ];

             DB::table('projets')->where('id', '=', $projets->id)->update($data);

            return redirect()->route('userp')->with('success','Projet mis a jour avec success');
        }else{
            return  redirect()->route('editer')->with('warning', 'Veuillez editer votre profile Avamt de soumettre un projets');
        }
    }


    public function delete(Projets $projets){

        Projets::destroy($projets->id);

        return redirect()->route('userp')->with('success', 'Projets supprimer avec success');
    }


}
