@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
        @can('is_admin')
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>88</h3>
                            <p>Usuários Total</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais detalhes <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>77</h3>
                            <p>Usuários Ativos</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais detalhes <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>88</h3>
                            <p>Usuários Pré-Cadastrados</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais detalhes <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>888</h3>
                            <p>Usuários Inativos</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais detalhes <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        @endcan
        <div class="row">
            <div class="col-9">
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">Listagem de usuários</h3>
                        @can('is_admin')
                            <div class="card-tools">
                                <a href="#" class="btn btn-tool btn-sm">
                                    <i class="fas fa-download"></i>
                                </a>
                                <a href="#" class="btn btn-tool btn-sm">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </div>
                        @endcan
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-striped table-valign-middle table-responsive">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Status</th>
                                    <th>Sexo</th>
                                    <th>Perfil</th>
                                    <th>Departamento</th>
                                    <th>Data de Criação</th>
                                    <th>Data de Atualizado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->sexo }}</td>
                                        <td>{{ $item->tipo_de_conta }}</td>
                                        <td>{{ $item->departamento }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td>
                                    </tr>
                                @endforeach
                            
                                
                            </tbody>
                        </table>
                        <div class="d-felx justify-content-center">
                                
                        </div>
                    </div>
                </div>
            </div>
            @can('is_admin')
                <div class="col-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-shield"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Administradores</span>
                            <span class="info-box-number">88</span>
                        </div>
                    </div>
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-default elevation-1"><i class="fas fa-users"></i></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Usuários padrão</span>
                            <span class="info-box-number">88</span>
                        </div>
                    </div>
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-male"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Usuários Masculino</span>
                            <span class="info-box-number">88</span>
                        </div>
                    </div>
                    <div class="info-box mb-3">
                        <span class="info-box-icon elevation-1" style="background-color: #96509c!important;"><i class="fas fa-female"></i></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Usuários Feminino</span>
                            <span class="info-box-number">88</span>
                        </div>
                    </div>
                </div>
            @endcan
        </div>
    </div>
</section>
@stop

@section('footer')
    <p>Welcome to this beautiful admin panel.</p>
@stop

