@extends('backend.layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('/assets/plugins/datatables/dataTables.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/plugins/datatables/dataTables.tableTools.css') }}">
    <style>
        .imgg{
            max-width:60px;
            max-height:60px;
        }
    </style>
@stop

@section('content')

<div id="main-content">
    @include('backend.partials.alert')
    <div class="page-title"> <i class="icon-custom-left"></i>
        <h3 class="pull-left"><strong>Listado</strong> de palabras</h3>
        <a href="/dashboard/camino/create" class="btn btn-success pull-right m-20"> Nueva palabra </a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading bg-blue">
                    <h3 class="panel-title"><strong>Listado</strong> de palabras</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 table-responsive table-blue filter-right">

                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover table-dynamic">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Palabra</th>
                                        <th>Letra faltante</th>
                                        <th>Palabra completa</th>
                                        <th>Tipo</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caminos as $key => $camino)      
                                    <tr>
                                        <td>{{ $camino->id }}</td>
                                        <td>{{ $camino->palabra }}</td>
                                        <td> {{ $camino->silabas }} </td>   
                                        <td> {{ $camino->sustituir() }} </td>    
                                        <td> {{ $camino->getType() }} </td>                                  
                                        <td><a href="/dashboard/camino/{{ $camino->id }}/delete" class="btn btn-danger">Eliminar</a></td>
                                    </tr>
                                    @endforeach                                           
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('javascript')
    <script src="{{ asset('/assets/plugins/bootstrap-switch/bootstrap-switch.js') }}"></script>
    <script src="{{ asset('/assets/plugins/bootstrap-progressbar/bootstrap-progressbar.js') }}"></script>
    <script src="{{ asset('/assets/plugins/datatables/dynamic/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/datatables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('/assets/plugins/datatables/dataTables.tableTools.js') }}"></script>
    <script src="{{ asset('/assets/plugins/datatables/table.editable.js') }}"></script>
    <script src="{{ asset('/assets/js/table_dynamic.js') }}"></script>
@stop