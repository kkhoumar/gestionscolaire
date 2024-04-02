<?php

namespace App\Http\Controllers\Admin\Etudiant;

use App\Models\User;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Admin\etudiant\EtudiantRequest;
use App\Http\Requests\Admin\EtudiantRequest as AdminEtudiantRequest;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('admin.etudiant.ajoutEtudiant');
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
    public function store(AdminEtudiantRequest $request)
    {


        if($request->hasFile('photo')){
            //obtenir le nom avec extension
            $filenametext = $request->file('photo')->getClientOriginalName();
            //obtenir le nom jsute du fichier
            $filename =pathinfo($filenametext,PATHINFO_FILENAME);
            //obtenir le nom du fichier  dextension
            $extension =$request->file('photo')->getClientOriginalExtension();
            //le nom di fichier a telecharger
            $filestore = $filename .'_'.time().'.'.$extension;
            //upload
            $photo = $request->File('photo')->storeAS('public/Etudiant', $filestore);
        }

            $etudiant = new Etudiant();

            $etudiant->nom_etud = $request->nom;
            $etudiant->prenom_etud = $request->prenom;
            $etudiant->email_etud = $request->email;
            $etudiant->date_n_etud = $request->naissance;
            $etudiant->lieu_n_etud = $request->lieu_naissance;
            $etudiant->numero = $request->numero;
            $etudiant->mot_p_etud = Hash::make($request->mot_passe);
            $etudiant->photo =  $filestore ;
           // dd($request->all());::
            Flashy::message('votre utilisteur a ete bien cree');
            $etudiant->save();

            $user = new User();
            $user->name = $request->nom;
            $user->email = $request->email;
            $user->role_id = $request->role_id;
            $user->password = Hash::make($request->mot_passe);
            $user->save();

            return redirect()->route('create.users');


    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $etudiant = Etudiant::orderBy('id_etud','desc')->cursorPaginate(3);
         return view('admin.etudiant.listeetudiant',compact('etudiant'));
    }



    public function details($id){
       $details =Etudiant::find($id);
        return view('admin.etudiant.details',compact('details'));
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
