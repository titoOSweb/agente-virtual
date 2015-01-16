@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/css/primer-grado.css">

<style>
.pieces div{
	color: #fff;
	text-shadow: #000 0 1px;
	box-shadow: 5px;
	padding: 10px;
	background: -moz-linear-gradient(left center, rgb(0,0,0), rgb(79,79,79), rgb(21,21,21));
	background: -webkit-gradient(linear, left top, right top,
		color-stop(0, rgb(0,0,0)),
		color-stop(0.50, rgb(79,79,79)),
		color-stop(1, rgb(21,21,21)));
	background: -webkit-linear-gradient(left center, rgb(0,0,0), rgb(79,79,79), rgb(21,21,21));
	background: -ms-linear-gradient(left center, rgb(0,0,0), rgb(79,79,79), rgb(21,21,21));
	border-bottom: 1px solid #ddd;
}

[draggable] {
	-moz-user-select: none;
	-khtml-user-select: none;
	-webkit-user-select: none;
	user-select: none;
	/* Required to make elements draggable in old WebKit */
	-khtml-user-drag: element;
	-webkit-user-drag: element;
}
dd {
	padding: 5px 0;
}
.dnd {
	-webkit-transition: -webkit-transform 0.2s ease-out;
	-moz-transition: -moz-transform 0.2s ease-out;
	-o-transition: -o-transform 0.2s ease-out;
	-ms-transition: -ms-transform 0.2s ease-out;
}

.hide{
	display: none;
}
</style>
@endsection

@section('content')

<!--start section-->
<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img8">

	<div class="nicdark_filter greydark">

		<!--start nicdark_container-->
		<div class="nicdark_container nicdark_clearfix">

			<div class="grid grid_12">
				<div class="nicdark_space100"></div>
				<div class="nicdark_space100"></div>
				<h1 class="white subtitle">PRIMER GRADO</h1>
				<div class="nicdark_space10"></div>
				<h3 class="subtitle white">FORMANDO PALABRAS</h3>
				<div class="nicdark_space20"></div>
				<div class="nicdark_divider left big"><span class="nicdark_bg_white nicdark_radius"></span></div>
				<div class="nicdark_space40"></div>
				<div class="nicdark_space50"></div>
			</div>

		</div>
		<!--end nicdark_container-->

	</div>

</section>
<!--end section-->

<!--start section-->
<section class="nicdark_section">

	<!--start nicdark_container-->
	<div class="nicdark_container nicdark_clearfix">

		<div class="nicdark_space50"></div>

		<div class="grid grid_8">
			<div class="nicdark_space50"></div>

			<h1 class="subtitle greydark">Formando palabras:</h1>
			<div class="nicdark_space20"></div>
			<div class="nicdark_divider left small"><span class="nicdark_bg_yellow nicdark_radius"></span></div>
			<div class="nicdark_space20"></div>

			<div class="row">

				<div id="adivina" class="grid grid_10 center" align="center">
					<img src="" alt="" id="image" class="grid grid_4 center left">
					<div class="grid grid_4 right pieces">
						<div><h3>Selecciona un elemento:</h3></div>
						<hr>
					</div>
					<div class="grid grid_4 hide" id="alerta">
						<div class="nicdark_alerts nicdark_bg_red nicdark_radius nicdark_shadow">
							<p class="white nicdark_size_medium"><i class="icon-cancel-circled-outline iconclose"></i>&nbsp;&nbsp;&nbsp;<strong>Opción incorrecta:</strong>&nbsp;&nbsp;&nbsp;Intenta de nuevo.</p>
							<i class="icon-cancel-outline nicdark_iconbg right medium red"></i>
						</div>
					</div>

					<div id="resultado" class="grid grid_4"></div>
					<div class="letras grid grid_8 center"></div>
				</div>

				
				
			</div>	
		</div>
		
		<!--sidebar-->
		<div class="grid grid_4">			
			@include('layouts.agente')
		</div>

	</div>

	<!--end nicdark_container-->
</section>
<!--end section-->
@endsection

@section('js')
<script src="/js/formando-palabras.js"> </script>	
<script>
Element.prototype.hasClassName = function(name) {return new RegExp("(?:^|\\s+)" + name + "(?:\\s+|$)").test(this.className); };
Element.prototype.addClassName = function(name) {if (!this.hasClassName(name)) {this.className = this.className ? [this.className, name].join(' ') : name; } };
Element.prototype.removeClassName = function(name) {if (this.hasClassName(name)) {var c = this.className; this.className = c.replace(new RegExp("(?:^|\\s+)" + name + "(?:\\s+|$)", "g"), ""); } };

var samples = samples || {};
var nivel = 0;
var max = ($(".dnd").length/2);
(function() {
	var cols_ = document.querySelectorAll('.dnd');
	console.log(cols_)
	var dragSrcEl_ = null;

	this.handleDragStart = function(e) {
		$("#alerta").addClass('hide');

		e.dataTransfer.effectAllowed = 'move';
		e.dataTransfer.setData('text/html', this.innerHTML);

		dragSrcEl_ = this;

    // this/e.target is the source node.
    this.addClassName('moving');

};

this.handleDragOver = function(e) {

	if (e.preventDefault) {
      e.preventDefault(); // Allows us to drop.
  }

  e.dataTransfer.dropEffect = 'move';

  return false;
};

this.handleDragEnter = function(e) {
	this.addClassName('over');
};

this.handleDragLeave = function(e) {
	this.removeClassName('over');
};

this.handleDrop = function(e) {
	
	e.preventDefault();
	if (e.stopPropagation) {
		e.stopPropagation(); 
	}
    // Don't do anything if we're dropping on the same dnd we're dragging.
    if (dragSrcEl_ != this) {
    	//if the type is equal
    	if(dragSrcEl_.getAttribute('data-index') == this.getAttribute('data-index')){
    		dragSrcEl_.remove();
    		this.value = e.dataTransfer.getData('text/html');
    		nivel++;
    		if(nivel == max){
    			correcto();
    		}
    	}else{
    		$("#alerta").removeClass('hide');
    	}
    	
    }
    return false;
};

this.handleDragEnd = function(e) {
    // this/e.target is the source node.
    [].forEach.call(cols_, function (col) {
    	col.removeClassName('over');
    	col.removeClassName('moving');
    });
};

[].forEach.call(cols_, function (col) {
    col.setAttribute('draggable', 'true');  // Enable dnds to be draggable.
    col.addEventListener('dragstart', this.handleDragStart, false);
    col.addEventListener('dragenter', this.handleDragEnter, false);
    col.addEventListener('dragover', this.handleDragOver, false);
    col.addEventListener('dragleave', this.handleDragLeave, false);
    col.addEventListener('drop', this.handleDrop, false);
    col.addEventListener('dragend', this.handleDragEnd, false);
});
})();
</script>

</script>
@endsection
