@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/css/segundo-grado.css">

<style>
figure img { border: 1px solid #ccc; }
h1,h2,h3,h4 { clear: both; }
/* Prevent the contents of draggable elements from being selectable. */
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
#imagenes .dnd {
	-webkit-transition: -webkit-transform 0.2s ease-out;
	-moz-transition: -moz-transform 0.2s ease-out;
	-o-transition: -o-transform 0.2s ease-out;
	-ms-transition: -ms-transform 0.2s ease-out;
}

.hide{
	display: none;
}

/* */

.singular img.el,
.plural img.el{
	max-width: 80px !important;
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
				<h1 class="white subtitle">SEGUNDO GRADO</h1>
				<div class="nicdark_space10"></div>
				<h3 class="subtitle white">SINGULAR Y PLURAL</h3>
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

			<h1 class="subtitle greydark">Arrastra la imagen al lugar que corresponde:</h1>
			<div class="nicdark_space20"></div>
			<div class="nicdark_divider left small"><span class="nicdark_bg_yellow nicdark_radius"></span></div>
			<div class="nicdark_space20"></div>

			<div class="row">

				<div class="grid grid_12" id="imagenes">
					
				</div>

				<div class="grid grid_8 hide" id="alerta">
					<div class="nicdark_alerts nicdark_bg_red nicdark_radius nicdark_shadow">
						<p class="white nicdark_size_medium"><i class="icon-cancel-circled-outline iconclose"></i>&nbsp;&nbsp;&nbsp;<strong>Opción incorrecta:</strong>&nbsp;&nbsp;&nbsp;Intenta de nuevo.</p>
						<i class="icon-cancel-outline nicdark_iconbg right medium red"></i>
					</div>
				</div>

				<div class="grid grid_8 hide nicdark_textevidence nicdark_width_percentage100" id="correcto">
					<div class="nicdark_textevidence nicdark_relative"> <a href="#" class="nicdark_btn_icon nicdark_bg_green extrabig nicdark_radius white nicdark_absolute nicdark_shadow"><i class="icon-ok big"></i></a>
						<div class="nicdark_activity nicdark_marginleft100">
							<h1 style="font-size:60px;padding-top:10px">Correcto</h1>
							<div class="nicdark_space20"></div> <a href="{{ URL::full() }}" class="nicdark_btn grey next-word"><i class="icon-right-open-outline"></i> Siguiente</a> </div>
							<div class="nicdark_space20"></div>
							<div class="nicdark_space20"></div>
						</div>
					</div>




				<div class="grid grid_10 center" align="center">
					
					<div class="grid_4 singular dnd" data-type="singular"></div>
					<div class="grid_4 plural dnd" data-type="plural"></div>

				</div>

				<div id="figuras-mas-letras" class="grid grid_6">
					


				</div>


			</div>	

			

			<div class="nicdark_space50"></div>

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
<script src="/js/singular-y-plural.js"></script>

<script>
// Using this polyfill for safety.
Element.prototype.hasClassName = function(name) {
	return new RegExp("(?:^|\\s+)" + name + "(?:\\s+|$)").test(this.className);
};

Element.prototype.addClassName = function(name) {
	if (!this.hasClassName(name)) {
		this.className = this.className ? [this.className, name].join(' ') : name;
	}
};

Element.prototype.removeClassName = function(name) {
	if (this.hasClassName(name)) {
		var c = this.className;
		this.className = c.replace(new RegExp("(?:^|\\s+)" + name + "(?:\\s+|$)", "g"), "");
	}
};


var samples = samples || {};
var nivel = 0;
// Full example
(function() {
	var cols_ = document.querySelectorAll('.dnd');
	console.log(cols_);
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
    	if(dragSrcEl_.getAttribute('data-type') == this.getAttribute('data-type')){
    		dragSrcEl_.innerHTML = '';
    		this.innerHTML = e.dataTransfer.getData('text/html');
    		nivel++;

    		Agente.correcto();

    		if(nivel == 4){
    			$("#correcto").removeClass('hide');
    		}
    	}else{
    		Agente.incorrecto();
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
<script>
	$( window ).load(function() {
		Agente.prepare('introLevel9');
	});
	</script>
@endsection
