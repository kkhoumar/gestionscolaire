<?php

namespace App\Http\Controllers\admin\excel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Etudiant;
use Spatie\SimpleExcel\SimpleExcelWriter;

class SimpleExcelController extends Controller
{
    public function importexcel(){

    }

    public function exportexcel(request $request){

        	// 1. Validation des informations du formulaire
    	$this->validate($request, [
    		'name' => 'bail|required|string',
    		'extension' => 'bail|required|string|in:xlsx,csv'
    	]);

    	// 2. Le nom du fichier avec l'extension : .xlsx ou .csv
    	$file_name = $request->name.".".$request->extension;

    	// 3. On récupère données de la table "clients"
    	$clients = Etudiant::select("nom_etud", "prenom_etud","email_etud", "date_n_etud", "lieu_n_etud","numero")->get();

    	// 4. $writer : Objet Spatie\SimpleExcel\SimpleExcelWriter
    	$writer = SimpleExcelWriter::streamDownload($file_name);

 		// 5. On insère toutes les lignes au fichier Excel $file_name
    	$writer->addRows($clients->toArray());

        // 6. Lancer le téléchargement du fichier
        $writer->toBrowser();

    }

    public function export(){
        return view('admin.excel.exportexcel');
    }
}
