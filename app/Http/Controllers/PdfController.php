<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function index()  {
        $pdf = Pdf::loadView('livewire.InvoiceDetail');
        return $pdf->download('invoice.pdf');

    }
}
