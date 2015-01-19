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
.dnd {
	-webkit-transition: -webkit-transform 0.2s ease-out;
	-moz-transition: -moz-transform 0.2s ease-out;
	-o-transition: -o-transform 0.2s ease-out;
	-ms-transition: -ms-transform 0.2s ease-out;
	cursor: move;
}

.hide{
	display: none;
}

#limite{
	font-size: 80px;
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
				<h3 class="subtitle white">ARRASTRA LOS NUMEROS</h3>
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

			<h1 class="subtitle greydark">Numeros mayores a: <strong id="limite"></strong></h1>
			<div class="nicdark_space20"></div>
			<div class="nicdark_divider left small"><span class="nicdark_bg_yellow nicdark_radius"></span></div>
			<div class="nicdark_space20"></div>

			<div class="nicdark_space50"></div>	

			<div class="row">
					
				<div id="opciones" class="grid grid_8 center" align="center">
					
				</div>

				<div class="grid grid_8 center" align="center">

					<div class="grid grid_8 hide nicdark_textevidence nicdark_width_percentage100" id="correcto">
					<div class="nicdark_textevidence nicdark_relative"> <a href="#" class="nicdark_btn_icon nicdark_bg_green extrabig nicdark_radius white nicdark_absolute nicdark_shadow"><i class="icon-ok big"></i></a>
						<div class="nicdark_activity nicdark_marginleft100">
							<h1 style="font-size:60px;padding-top:10px">Correcto</h1>
							<div class="nicdark_space20"></div> <a href="/" class="nicdark_btn grey next-word"><i class="icon-right-open-outline"></i> Siguiente</a> 
						</div>
						<div class="nicdark_space20"></div>
						<div class="nicdark_space20"></div>
					</div>
				</div>

					<hr>
				
					<a href="#" class="circulo dnd nicdark_btn nicdark_bg_blue extrasize nicdark_radius white nicdark_margin10"></a>
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
<script src="/js/arrastra-los-numeros.js"> </script>	
<script>
Element.prototype.hasClassName = function(name) {return new RegExp("(?:^|\\s+)" + name + "(?:\\s+|$)").test(this.className); };
Element.prototype.addClassName = function(name) {if (!this.hasClassName(name)) {this.className = this.className ? [this.className, name].join(' ') : name; } };
Element.prototype.removeClassName = function(name) {if (this.hasClassName(name)) {var c = this.className; this.className = c.replace(new RegExp("(?:^|\\s+)" + name + "(?:\\s+|$)", "g"), ""); } };

var nivel = 0;
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
    	//alert(dragSrcEl_.getAttribute('data-letra') +" == "+  this.getAttribute('data-letra'));
    	if(dragSrcEl_.getAttribute('data-numero') > this.getAttribute('data-limite')){
    		//dragSrcEl_.innerHTML = this.
    		//this.innerHTML = dragSrcEl_.getAttribute('data-letra');

    		var tpl = '<div>'+dragSrcEl_.innerHTML+'</div>';
    		this.innerHTML = this.innerHTML + tpl;

    		dragSrcEl_.remove();

    		nivel++;
    		if(nivel == this.getAttribute('data-mayores')){
    			//alert("correcto");
    			Agente.correcto();
    			$("#correcto").removeClass('hide');
    		}else{
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

<script>
	$( window ).load(function() {
		Agente.prepare('introLevel14');
	});
	</script>
@endsection
