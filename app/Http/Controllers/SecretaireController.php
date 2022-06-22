<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\sendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class SecretaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $secretary = true;
        if(!Auth()->user()->role_id){

            return redirect()->route('home'); }
        else{
            $secretary = true;
            $users = User::All();
            return view('secretaire',compact('secretary','users'));
        }
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
       
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);
    
            $user = User::create([
                'role_id' => 0,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
               
            ]);
            $user0 = ['name'=>$request->name, 
                        'email'=>$request->email,
                        'password'=>$request->password];
                
    
            Mail::to($user0['email'])->send(new sendMail(
                $user0
            ));
            return redirect()->route('secretaire.index')
                             ->with('success','Secretaire created successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
