<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ControllerRegiao extends Controller {
    
    public function getConsultaRegiao() {
        $bRegiao = DB::select('SELECT * FROM regiao ');
        return view('ConsultaRegiao')->with('regiao', $bRegiao);
    }
    
}