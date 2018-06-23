<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ControllerTerritorio extends Controller {
    
    /**
     * Busca o SQL da Consulta Padrão do Território.
     * 
     * @return View
     */
    public function getConsultaTerritorio() {
        $bTerritorio = DB::select('SELECT * FROM territorios JOIN regiao USING(IDRegiao)');
        return view('ConsultaTerritorio')->with('territorios', $bTerritorio);
    }
    //public function getCadastroTerritorio() {
    //    $bTerritorios = DB::select('INSERT INTO Territorios');
    //    return view('CadastroTerritorio')->with('Territorios', $bTerritorio);
    //}
    
}