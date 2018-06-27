@extends('Inicial')

@section('content')

<table class="table table-striped">
    <tr>
        <th>Código da Região</th>
        <th>Descrição da Região</th>
        <th>Ações</th>
    </tr>
    <?php foreach($regiao as $oRegiao): ?>
        <tr>
            <td><?= $oRegiao->IDRegiao ?></td>
            <td><?= $oRegiao->DescricaoRegiao ?></td>
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