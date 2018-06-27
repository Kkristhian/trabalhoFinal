<?php

namespace App\Http\Controllers;

class ControllerPrincipal extends Controller {
    
    public function getInicial() {
        return view('Inicial');
    }
}