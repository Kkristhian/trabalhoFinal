@extends('Inicial')

@section('conteudo')
<h1 class="meio">ADICIONAR FUNCIONARIO</h1>
<form action="/Inicial/CadastroFuncionario" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nome">NOME</label>
        <input type="text" name="nome" id="nome" class="form-control">
    </div>
    <div class="form-group">
        <label for="valor">SOBRENOME</label>
        <input type="textr" name="sobrenome" id="sobrenome" class="form-control">
    </div>
    <div class="form-group">
        <input class="btn btn-primary totalwidth" type="submit" value="CADASTRAR">
    </div>
</form>
@stop