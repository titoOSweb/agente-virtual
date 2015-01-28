@extends('backend.layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('/assets/plugins/wizard/wizard.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/plugins/jquery-steps/jquery.steps.css') }}">

<style>
.wizard-inline > .content
{
    min-height: 20em !important;
}
.wizard-inline > .steps > ul > li
{
    width: 100%;
}
</style>
@stop

@section('content')

<div id="main-content">    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Este módulo funciona para los siguientes juegos:</h3>
                            <h4>&bull; <a href="/primer-grado/camino-de-letras" target="_blank">Camino de letras</a> 
                                &bull; <a href="/segundo-grado/cada-palabra-en-su-lugar" target="_blank">Cada palabra en su lugar</a>
                                &bull; <a href="/segundo-grado/caminos-de-flechas" target="_blank">Camino de flechas</a>
                                &bull; <a href="/tercer-grado/dameros" target="_blank">Dameros</a>
                            </h4>
                            <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                            <form class="form-wizard" action="/dashboard/camino" method="POST">                                 
                                <h1>Completa los siguíentes datos:</h1>
                                <section>
                                    <div class="form-group col-md-12">
                                        <label for="palabra">Palabra (incluir el _ en donde falta la letra)*</label>
                                        <input id="palabra" name="palabra" type="text" class="form-control required" placeholder="CA_ALLO">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="country_id">Letra faltante *</label>
                                        <select class="form-control" data-style="input-sm btn-default" name="silabas">
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="V">V</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div> 


                                    <div class="form-group col-md-6">
                                        <label for="country_id">Tipo *</label>
                                        <select class="form-control" data-style="input-sm btn-default" name="imagen">
                                            <option value="">-- No aplica --</option>
                                            <option value="J">Juguete</option>
                                            <option value="A">Animal</option>
                                            <option value="F">Fruta</option>
                                            <option value="N">Nombre</option>
                                        </select>
                                    </div> 
                                                 
                                    <p class="pull-left m-20">(*) Obligatorio</p>                                    
                                </section>   
                                                            
                            </form>
                            <!-- END FORM WIZARD WITH VALIDATION -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('javascript')

<script type="text/javascript" src="{{ asset('/assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/plugins/jquery-validation/additional-methods.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/wizard/wizard.js') }}"></script>
<script src="{{ asset('/assets/plugins/jquery-steps/jquery.steps.js') }}"></script>
<script src="{{ asset('/assets/plugins/dropzone/dropzone.min.js') }}"></script>



<script>
$(document).on("ready", function(){

    var email = false;

    /****  Inline Form Wizard with Validation  ****/
    $(".form-wizard").steps({
        bodyTag: "section",
        onStepChanging: function (event, currentIndex, newIndex) {
            if (currentIndex > newIndex) {
                return true;
            } 
            

            var form = $(this);
            // Clean up if user went backward before
            if (currentIndex < newIndex) {
                // To remove error styles
                $(".body:eq(" + newIndex + ") label.error", form).remove();
                $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
            }
            // Disable validation on fields that are disabled or hidden.
            form.validate().settings.ignore = ":disabled,:hidden";
            // Start validation; Prevent going forward if false
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex) {


        },
        onFinishing: function (event, currentIndex) {
            var form = $(this);
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex) {
            var form = $(this);
            form.submit();
        }
    }).validate({
        errorPlacement: function (error, element) {
            element.before(error);
        },
        rules: {}
    });
   
    
});


</script>

@stop








