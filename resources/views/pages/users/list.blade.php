@extends('layout.master')

@section('content')
    <div class="row">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/users/list">Listar</a></li>
                <li class="breadcrumb-item active" aria-current="page">Listar</li>
            </ol>
        </nav>
        <h2>Filtro de Pesquisa</h2>
        <form class="needs-validation col-12" novalidate>
            <div class="form-row">
                <div class="col-md-3 mb-4">
                    <label for="validationCustom01">Nome</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="name" value="Luiz" required>
                </div>
                <div class="col-md-3 mb-4">
                    <label for="validationCustom02">Login</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Luferipe" required>
                </div>
                <div class="col-md-3 mb-4">
                    <label for="validationCustom02">Email</label>
                    <input type="text" class="form-control" id="validationCustom03" placeholder="Email" value="luferipe@gmail.com" required>
                </div>
                <div class="col-md-3 mb-4">
                    <label for="validationCustom02">Status</label>
                    <input type="text" class="form-control" id="validationCustom04" placeholder="Status" value="Ativo" required>
                </div>
            </div>
        </form>
        <!-- Tabela -->
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Nome Completo</th>
                <th scope="col">Login</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Luiz Fernando Ribeiro Pereira</td>
                <td>luferipe</td>
                <td>luferipe@gmail.com</td>
                <td>Ativo</td>
            </tr>
            <tr>
                <td>Luiz Fernando Ribeiro Pereira</td>
                <td>luferipe</td>
                <td>luferipe@gmail.com</td>
                <td>Ativo</td>
            </tr>
            <tr>
                <td>Luiz Fernando Ribeiro Pereira</td>
                <td>luferipe</td>
                <td>luferipe@gmail.com</td>
                <td>Ativo</td>
            </tr>
            </tbody>
        </table>

    </div>

@endsection
