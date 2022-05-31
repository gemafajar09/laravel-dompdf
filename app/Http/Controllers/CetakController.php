<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CetakController extends Controller
{
    public function index()
    {
        $data = ['satu' . 'dua'];
        view()->share('cetak', $data);
        $pdf = PDF::loadView('cetak', $data);
        // download PDF atau stream PDF
        return $pdf->stream('pdf_file.pdf');
    }
}
