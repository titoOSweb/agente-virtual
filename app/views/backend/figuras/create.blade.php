@extends('backend.layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('/assets/plugins/wizard/wizard.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/plugins/jquery-steps/jquery.steps.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/plugins/dropzone/dropzone.css') }}">

<style>
.wizard-inline > .content
{
    min-height: 20em !important;
}
.wizard-inline > .steps > ul > li
{
    width: 50%;
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
                            <h4>&bull; <a href="/primer-grado/figuras-mas-letras" target="_blank">Figura + letras</a> </h4>
                            <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                            <form class="form-wizard" action="/dashboard/figuras" method="POST">
                                 <h1>Imagen</h1>
                                <section>
                                    <div class="col-md-12">
                                        <div id="dropzone" class="dropzone"></div>
                                    </div>
                                </section>
                                <h1>Completa los siguíentes datos:</h1>
                                <section>
                                    <h3>Recuerda que la palabra debe comenzar por una vocal:</h3>
                                    <div class="form-group col-md-12">
                                        <label for="palabra">Palabra *</label>
                                        <input id="palabra" name="palabra" type="text" class="form-control required" placeholder="OSO">
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

    /* dz */
    $("div#dropzone").dropzone({
        url: "/api/upload/figuras",
        maxFiles: 1,
        init : function() {
            this.on("maxfilesexceeded", function(file){
                alert("Solo se permite una imagen por palabra.");
            });
        }
    });

    /* ajax */

   
    
});


</script>

@stop








