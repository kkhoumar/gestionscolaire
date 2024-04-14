<?php

namespace App\Http\Controllers\Admin\specialite;

use App\Models\Specialite;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SpecialiteRequest;
use League\CommonMark\Util\SpecReader;

class specialiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  view('admin.specialite.ajoutspecialite');

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
    public function store(SpecialiteRequest $request)
    {
       $specialite =new  Specialite;
       $specialite->designation_specialite =$request->designation_specialite;
       $specialite->save();
       Flashy::message('votre utilisteur a ete bien cree');
       return redirect()->route('create.specialite');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       $specialite = Specialite::orderBy('id_sp','desc')->cursorPaginate(3);
       return view('admin.specialite.listespecialite',compact('specialite'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sp = Specialite::find($id);
        return view('admin.specialite.modifier',compact('sp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $update =Specialite::find($id);
       $update->update();
       return view('admin.specialite.listespecialite');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $delete =Specialite::find($id);
        $delete->delete();
        return redirect()->route('show.specialite');
    }
}
