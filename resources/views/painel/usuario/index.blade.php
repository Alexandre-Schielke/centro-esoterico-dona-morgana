
@extends('painel.template')
@section('conteudo')
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">{{ $modulo }}<span class="float-right h6" style='color:#999'>Bem vindo {{ Auth::user()->name }}</span></h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">{{ $modulo }}</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="metric-label d-inline-block text-success font-weight-bold">
                                            <a href="{{  route('painel.novo.usuario') }}" class="btn btn-primary text-center" style="width:100%!important">novo usuário</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total de usuários</h5>
                                        <div class="metric-label d-inline-block text-success font-weight-bold">
                                            <span class="btn-primary p-2">{{ count($usuarios) }}</span> Usuarios
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted"> Total de Administradores</h5>
                                        <div class="metric-label d-inline-block text-success font-weight-bold">
                                            <span class="btn-primary p-2">{{ count($admins) }}</span> Administradores
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total de Perfis</h5>
                                        <div class="metric-label d-inline-block text-success font-weight-bold">
                                            <span class="btn-primary p-2">{{ count($perfis) }}</span> Perfis
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total de Inativos</h5>
                                        <div class="metric-label d-inline-block text-success font-weight-bold">
                                            <span class="btn-primary p-2">{{ count($inativos) }}</span> Usuários Inativos
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Recent Orders</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive" style="padding:1%">
                                            <table id="example" class="display" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Nome</th>
                                                        <th>Perfil</th>
                                                        <th>Ativo</th>
                                                        <th>Editar</th>
                                                        <th>Excluir</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($usuarios as $usuario)
                                                    <tr>
                                                        <td>{{ $usuario->id }}</td>
                                                        <td>{{ $usuario->name }}</td>
                                                        <td>{{ $usuario->perfil->titulo }}</td>
                                                        <td>{{ $usuario->ativo == '1' ? 'Ativo' : 'Inativo' }}</td>
                                                        <td><a href="{{ route('painel.editar.usuario', ['id' => $usuario->id]) }}" class="btn btn-primary" type="submit">Editar</a></td>
                                                        <td><a href="{{ route('painel.delete.usuario', ['id' => $usuario->id]) }}" type="button" class="btn btn-danger">excluir</a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Nome</th>
                                                        <th>Perfil</th>
                                                        <th>Ativo</th>
                                                        <th>Editar</th>
                                                        <th>Excluir</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->
                        </div>
                    </div>
                </div>
            </div>
           @stop
