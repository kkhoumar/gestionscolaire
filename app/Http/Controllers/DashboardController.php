<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashboard.dashboard');
    }

    public function dashboardEnseignant(){
         return view('enseignant.enseignanthome');
    }



    public function dashboardEtudiant(){
        return view('etudiant.etudianthome');
   }


}
