<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ControllerFuncionario extends Controller {
    
    /**
     * SQL padrão da Consulta de Funcionários.
     * 
     * @return View
     */
    public function getConsultaFuncionario() {
        $bFuncionario = DB::select('SELECT * FROM funcionarios');
        return view('ConsultaFuncionario')->with('funcionarios', $bFuncionario);
    }
    //public function getCadastroFuncionario() {
    //    $bFuncionario = DB::select('INSERT INTO funcionarios');
    //    return view('CadastroFuncionario')->with('funcionarios', $bFuncionario);
    //}

    public function getCadastroFuncionario(Request $request) {
        $data = $request->all();
        $add = DB::insert("INSERT INTO funcionarios(nome,sobrenome) VALUES(?,?)",
            [$data['nome'],
            $data['sobrenome']]);
        if ($add) {
            return redirect('/Inicial')->with('adicionou',true);
        }
    }
}
