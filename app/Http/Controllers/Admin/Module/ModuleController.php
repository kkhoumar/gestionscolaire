<?php

namespace App\Http\Controllers\Admin\Module;

use App\Models\Module;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ModuleRequest;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.module.AjoutModule');
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
    public function store(ModuleRequest $request)
    {
        Module::create($request->all());
        Flashy::message('votre module a ete bien crée');

        return redirect()->route('create.module');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $module = Module::all();
        return view('admin.module.listeModule',compact('module'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $module = Module::find($id);
        return view('admin.module.edit',compact('module'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $module = Module::find($id);
        $module->update($request->all());
        return redirect()->route('show.module');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $delete = Module::find($id);
        $delete->delete();
        return redirect()->route('show.module');
    }
}
