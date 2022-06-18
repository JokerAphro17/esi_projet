<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        validate($request, [
            'matricule' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'cycle' => 'required|string|max:255',
            'niveau' => 'required|string|max:255',
            'annee' => 'required|string|max:255',
            'photo' => 'required|string|max:255',
            'email' => 'required|string|max:255',
        ]);

       Etudiant::create($request->all());           
       return redirect()->route('etudiant.index')
                        ->with('success','Etudiant created successfully');
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
