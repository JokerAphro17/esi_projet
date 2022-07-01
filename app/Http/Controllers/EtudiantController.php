<?php

namespace App\Http\Controllers;

use Dotenv\Util\Str;
use App\Mail\CarteMail;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = \App\Models\Etudiant::all();
        $list = true;
        return view('welcome', compact('etudiants', 'list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $stud = true;
        return view('ajout', compact('stud'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the form data
        $this->validate($request, [

            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'cycle' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'annee' => 'required'
        ]);

        $dest_path = 'public/images/etudiants';
        $file_name = $request->file('file')->getClientOriginalName();
        $request->file('file')->storeAs($dest_path, $file_name);

        Etudiant::create([
            'matricule' => 'IF' . substr($request->annee, 0, 4) . $request->prenom[0] . $request->nom[0] .  rand(1, 99999),
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'annee' => $request->annee,
            'photo' => $file_name,
        ]);
        return redirect()->route('home')->with('success', 'Etudiant ajouté avec succès');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Gate::allows('isAdmin')){
            $etudiant = Etudiant::find($id);
            $stud = true;
            return view('ajout', compact('etudiant', 'stud'));
        }
            return redirect()->route('home');
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   if(Gate::denies('isAdmin')){
            return redirect()->route('home');
        }
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'cycle' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'annee' => 'required'
        ]);
            $etudiant = Etudiant::find($id);
            $etudiant->nom = $request->nom;
            $etudiant->prenom = $request->prenom;
            $etudiant->email = $request->email;
            $etudiant->annee = $request->annee;
            $etudiant->cycle = $request->cycle;
            if ($request->hasFile('file')) {
                $dest_path = 'public/images/etudiants';
                $file_name = $request->file('file')->getClientOriginalName();
                $request->file('file')->storeAs($dest_path, $file_name);
                $etudiant->photo = $file_name;
            }
            $etudiant->save();
            return redirect()->route('home')->with('success', 'Etudiant modifié avec succès');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Gate::allows('isAdmin')){
            $etudiant = Etudiant::find($id);
            $etudiant->delete();
        }
        return json_encode(['success' => "Vous n'avez pas le droit d'effectuer cette action"]);
            
    
    }
    public function show($id)
    {
        $etudiant = Etudiant::find($id);
        return view('carte', compact('etudiant'));
    }
    public function sendMail($id)
    {
        $etudiant = Etudiant::find($id);
        
        Mail::to($etudiant->email)->send(new CarteMail(
            $etudiant
        ));
    }
}
