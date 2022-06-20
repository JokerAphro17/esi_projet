<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
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
        return view('welcome', compact('etudiants'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
             'matricule' => 'required|unique:etudiants',
          'nom' => 'required',
          'prenom' => 'required',
            'email' => 'required',
            'cycle' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'annee' => 'required']);
        $dest_path = 'public/images/etudiants';
        $file_name = $request->file('file')->getClientOriginalName();
        $request->file('file')->storeAs($dest_path, $file_name);
        $etudiant = new \App\Models\Etudiant;
        $etudiant->nom = $request->nom;
        $etudant->matricule = $request->matricule;
        $etudiant->prenom = $request->prenom;
        $etudiant->email = $request->email;
        $etudiant->cycle = $request->cycle;
        $etudiant->annee = $request->annee;
        $etudiant->photo = $file_name;
        $etudiant->save();

      
    
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
        $etudiant = Etudiant::find($id);
        return view('carte',compact('etudiant')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->update($request->all());
        return redirect()->route('home')
                        ->with('success','Etudiant updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect()->route('home')
                        ->with('success','Etudiant deleted successfully');
    }
    public function show($id)
    {
        $etudiant = Etudiant::find($id);
        return view('carte',compact('etudiant')); 
    }
}
