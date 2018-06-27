@extends('Inicial')

@section('content')

<table class="table table-striped">
    <tr>
        <th>Código do Territorio</th>
        <th>Descrição do Territorio</th>
        <th>Código da Região</th>
        <th>Descrição da Região</th>
        <th>Ações</th>
    </tr>
    <?php foreach($territorios as $oTerritorio): ?>
        <tr>
            <td><?= $oTerritorio->IDTerritorio ?></td>
            <td><?= $oTerritorio->DescricaoTerritorio ?></td>
            <td><?= $oTerritorio->IDRegiao ?></td>
            <td><?= $oTerritorio->DescricaoRegiao ?></td>
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