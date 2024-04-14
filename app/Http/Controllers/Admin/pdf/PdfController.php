<?php

namespace App\Http\Controllers\admin\pdf;

use Barryvdh\DomPDF;
use App\Models\Etudiant;


use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PdfController extends Controller
{
    public function index(){

        $etudiant = Etudiant::select('*')
        ->get();

        $pdf = PDF::loadView('admin.etudiant.pdfetudiant', compact('etudiant'));
        return $pdf->stream('Laporan-Data-Santri.pdf');

}
}
