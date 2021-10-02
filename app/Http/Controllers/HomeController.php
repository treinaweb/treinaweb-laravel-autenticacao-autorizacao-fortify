<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * mostra a tela inicial da aplicação
     *
     * @return void
     */
    public function index()
    {
        return view('home');
    }
}
