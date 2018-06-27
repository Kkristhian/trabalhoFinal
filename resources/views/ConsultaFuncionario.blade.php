@extends('Inicial')

@section('content')

<table class="table table-striped">

    <tr>
        <th>Cód Func</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Titulo</th>
        <th>Titulo Cortesia</th>
        <th>Nascimento</th>
        <th>Admissão</th>
        <th>Endereço</th>
        <th>Cidade</th>
        <th>Região</th>
        <th>CEP</th>
        <th>País</th>
        <th>Telefone Residencial</th>
        <th>Extensão</th>
        <th>Reportase a</th>
        <th>Ações</th>
    </tr>
    
    <?php foreach($funcionarios as $oFunc): ?>
        <tr>
            <td><?= $oFunc->IDFuncionario ?></td>
            <td><?= $oFunc->Nome ?></td>
            <td><?= $oFunc->Sobrenome ?></td>
            <td><?= $oFunc->Titulo ?></td>
            <td><?= $oFunc->TituloCortesia ?></td>
            <td><?= $oFunc->DataNac ?></td>
            <td><?= $oFunc->DataAdmissao ?></td>
            <td><?= $oFunc->Endereco ?></td>
            <td><?= $oFunc->Cidade ?></td>
            <td><?= $oFunc->Regiao ?></td>
            <td><?= $oFunc->Cep ?></td>
            <td><?= $oFunc->Pais ?></td>
            <td><?= $oFunc->TelefoneResidencial ?></td>
            <td><?= $oFunc->Extensao ?></td>
            <td><?= $oFunc->Reportase?></td>
            <td>
                <a href="">
                    <i  class="btn btn-primary"><span class="glyphicon glyphicon-refresh">Update</span></i>
                </a>
                <a href="">
                    <i class="btn btn-danger"><span class="glyphicon glyphicon-remove">Delete</span></i>
                </a>
            </td>
        </tr>
    <?php endforeach ?>
    
</table>
<?php @stop ?>

@endsection