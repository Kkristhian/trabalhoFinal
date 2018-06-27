<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ControllerRegiao extends Controller {
    
    public function getConsultaRegiao() {
        $bRegiao = DB::select('SELECT * FROM regiao ');
        return view('ConsultaRegiao')->with('regiao', $bRegiao);
    }
    //public function getCadastroRegiao() {
    //    $bRegiao = DB::insert("INSERT INTO regiao VALUES (idRegiao,nome) "
    //   return view('CadastroRegiao')->with('regiao', $bRegiao);
    //
}