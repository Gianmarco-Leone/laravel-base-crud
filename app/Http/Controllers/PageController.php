<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Controller per le pagine statiche

class PageController extends Controller
{
    // Logica per ritornare la visualizzazione della homepage
    public function homepage() {
        return view('homepage');
    }
}