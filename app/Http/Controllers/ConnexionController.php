<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConnexionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnexionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('connexion.connexion');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ConnexionRequest $request)
    {
        //dd($request->email,$request->password);

        $connexion = $request->only(['email','password']);
        if(Auth::attempt($connexion)  && Auth::user()->user_role->role_id  == 1){
            return redirect()->route('dashboard')->with('massage','vous etes connectes');
        }else if(Auth::attempt($connexion)  && Auth::user()->user_role->role_id  == 2){
            return redirect()->route('enseignant')->with('massage','vous etes connectes');
        }else if(Auth::attempt($connexion)  && Auth::user()->user_role->role_id  == 3){
            return redirect()->route('etudiant')->with('massage','vous etes connectes');
        }else{
            return redirect()->back()->with('message','non base de donne');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
