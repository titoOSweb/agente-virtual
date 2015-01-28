@extends('backend.layouts.master')

@section('css')
<link href="/assets/plugins/datetimepicker/jquery.datetimepicker.css" rel="stylesheet">
<link href="/assets/plugins/pickadate/themes/default.css" rel="stylesheet">
<link href="/assets/plugins/pickadate/themes/default.date.css" rel="stylesheet">
<link href="/assets/plugins/pickadate/themes/default.time.css" rel="stylesheet">
@endsection

@section('content')

<div id="main-content" class="dashboard">
   
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                            <h2>Hola {{ Auth::user()->name() }}! Bienvenido a Virtual ED.</h2>
                        </div>                  
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    {{--<div class="row">        
        <div class="col-lg-12 m-b-20">
            <div class="modal fade" id="event-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                            <h4 class="modal-title">
                                <strong>Manage</strong> my events
                            </h4>
                        </div>
                        <div class="modal-body">
                            <p></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default"
                                data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success save-event">Create
                                event</button>
                            <button type="button" class="btn btn-danger delete-event"
                                data-dismiss="modal">Delete</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <div id="external-events" class="bg-white row m-0">
                <div class="col-md-4 p-0">
                    <div class="widget bg-gray-l">
                        <div class="widget-body p-b-0">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h2 class="panel-title width-100p c-blue w-500 f-20 carrois"
                                        id="calender-current-day">Events Manager</h2>
                                    <div id='external-events'>
                                        <br> <br> <br>
                                        <div class="external-event bg-green" data-class="bg-green"
                                            style="position: relative;">
                                            <i class="fa fa-move"></i>Sport
                                        </div>
                                        <div class="external-event bg-purple" data-class="bg-purple"
                                            style="position: relative;">
                                            <i class="fa fa-move"></i>Meeting
                                        </div>
                                        <div class="external-event bg-red" data-class="bg-red"
                                            style="position: relative;">
                                            <i class="fa fa-move"></i>Work
                                        </div>
                                        <div class="external-event bg-blue" data-class="bg-blue"
                                            style="position: relative;">
                                            <i class="fa fa-move"></i>Children
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-md-offset-1 p-0 no-bd">
                    <div class="widget bg-white">
                        <div class="widget-body p-b-0">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
</div>


<div class="modal" id="modal-filter">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel"><strong>Filtrar notificaciones</strong> </h4>
                </div>
                <div class="modal-body ">   

                <div class="row">
                    <div class="col-md-6" align="center">
                        <h3>Desde:</h3>
                        <div class="datepicker start" data-inline="true" data-date-format="yyyy-mm-dd"></div>
                    </div>

                    <div class="col-md-6" align="center">
                        <h3>Hasta:</h3>
                        <div class="datepicker end" data-inline="true" data-date-format="yyyy-mm-dd"></div>
                    </div>                    
                </div> 

                </div>        
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="filter-action">Filtrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('javascript')

<script src="{{ asset('assets/plugins/metrojs/metrojs.min.js') }}"></script>
<script src="{{ asset('assets/plugins/google-maps/markerclusterer.js') }}"></script>
<script src="{{ asset('assets/plugins/charts-flot/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/plugins/charts-flot/jquery.flot.animator.min.js') }}"></script>
<script src="{{ asset('assets/plugins/charts-flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('assets/plugins/charts-flot/jquery.flot.time.min.js') }}"></script>
<script src="{{ asset('assets/plugins/charts-morris/raphael.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

<script src="{{ asset('assets/plugins/datetimepicker/jquery.datetimepicker.js')}}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('assets/plugins/pickadate/picker.js')}}"></script>
<script src="{{ asset('assets/plugins/pickadate/picker.date.js')}}"></script>
<script src="{{ asset('assets/plugins/pickadate/picker.time.js')}}"></script>
<script src="{{ asset('assets/plugins/bootstrap-switch/bootstrap-switch.js')}}"></script>
<script src="{{ asset('assets/plugins/bootstrap-progressbar/bootstrap-progressbar.js')}}"></script>
@stop

