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
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-dismissible fade show" style="position: ">
                                        <strong>Sucesso!</strong> {{ $message }}
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    </div>
				                @endif
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total de conteúdos</h5>
                                        <div class="metric-label d-inline-block text-success font-weight-bold">
                                            <span class="btn-primary p-2">{{ count($conteudos) }}</span> Conteúdos
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total de Categorias</h5>
                                        <div class="metric-label d-inline-block text-success font-weight-bold">
                                            <span class="btn-primary p-2">{{ count($categorias) }}</span> Categorias
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total de Inativos</h5>
                                        <div class="metric-label d-inline-block text-success font-weight-bold">
                                            <span class="btn-primary p-2">{{ count($inativos)  }}</span> Usuários Inativos
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="metric-label d-inline-block text-success font-weight-bold">
                                            <a href="{{  route('painel.novo.conteudo') }}" class="btn btn-primary text-center" style="width:100%!important">novo conteúdo</a>
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
                                                        <th>titulo</th>
                                                        <th>descricao</th>
                                                        <th>categoria</th>
                                                        <th>Ativo</th>
                                                        <th>Editar</th>
                                                        <th>Excluir</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($conteudos as $conteudo)
                                                    <tr>
                                                        <td class="text-center">{{ $conteudo->id }}</td>
                                                        <td>{{ $conteudo->titulo }}</td>
                                                        <td>{{ $conteudo->descricao }}</td>
                                                        <td class="text-center">{{ $conteudo->categoria->titulo }}</td>
                                                        <td class="text-center">{{ $conteudo->ativo == '1' ? 'Ativo' : 'Inativo' }}</td>
                                                        <td><a href="{{ route('painel.editar.conteudo', ['id' => $conteudo->id]) }}" class="btn btn-primary" type="submit">Editar</a></td>
                                                        <td><a href="{{ route('painel.delete.conteudo', ['id' => $conteudo->id]) }}" type="button" class="btn btn-danger">excluir</a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>titulo</th>
                                                        <th>descricao</th>
                                                        <th>categoria</th>
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
