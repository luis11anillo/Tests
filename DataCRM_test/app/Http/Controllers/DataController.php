<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOTools;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index() 
    {
        SEOTools::setTitle('Gestión comercial guía completa: ventajas y objetivos');
        
        return view('index');
    }
}
