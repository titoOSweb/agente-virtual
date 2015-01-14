@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/css/segundo-grado.css">
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
				<h3 class="subtitle white">CADA PALABRA EN SU LUGAR</h3>
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


			<div class="row">

				<div id="palabra-aleatoria" class="grid grid_8 center" align="center">
					<h1 class="dnd"></h1>
					<hr>
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
							<div class="nicdark_space20"></div> <a href="/" class="nicdark_btn grey next-word"><i class="icon-right-open-outline"></i> Siguiente</a> 
							<div class="nicdark_space20"></div> <a href="/" class="nicdark_btn grey reload"><i class="icon-reload"></i> Volver a jugar</a> 
						</div>
						<div class="nicdark_space20"></div>
						<div class="nicdark_space20"></div>
					</div>
				</div>


				<div class="grid grid_10 center" align="center" id="lugar">
					
					<div class="grid_2 nicdark_bg_yellow">						
						<div class="nicdark_textevidence nicdark_bg_greydark">
							<h4 class="white nicdark_margin10">NOMBRES</h4>
							<div data-type="N" class="dnd nicdark_bg_grey2 soltar">Arrastra Aquí!</div>							
						</div>
						<ul class="nicdark_list border lista" id="list-N"></ul>
					</div>

					<div class="grid_2 nicdark_bg_blue">
						<div class="nicdark_textevidence nicdark_bg_greydark">
							<h4 class="white nicdark_margin10">JUGUETES</h4>
							<div data-type="J" class="dnd nicdark_bg_grey2 soltar">Arrastra Aquí!</div>							
						</div>
						<ul class="nicdark_list border lista" id="list-J"></ul>
					</div>

					<div class="grid_2 nicdark_bg_red">
						<div class="nicdark_textevidence nicdark_bg_greydark">
							<h4 class="white nicdark_margin10">ANIMALES</h4>
							<div data-type="A" class="dnd nicdark_bg_grey2 soltar">Arrastra Aquí!</div>							
						</div>
						<ul class="nicdark_list border lista" id="list-A"></ul>
					</div>

					<div class="grid_2 nicdark_bg_green">
						<div class="nicdark_textevidence nicdark_bg_greydark">
							<h4 class="white nicdark_margin10">FRUTAS</h4>
							<div data-type="F" class="dnd nicdark_bg_grey2 soltar">Arrastra Aquí!</div>							
						</div>
						<ul class="nicdark_list border lista" id="list-F"></ul>
					</div>
				</div>
				<div id="figuras-mas-letras" class="grid grid_6"></div>
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
<script src="/js/cada-palabra-en-su-lugar.js"> </script>	
<script>
Element.prototype.hasClassName = function(name) {return new RegExp("(?:^|\\s+)" + name + "(?:\\s+|$)").test(this.className); };
Element.prototype.addClassName = function(name) {if (!this.hasClassName(name)) {this.className = this.className ? [this.className, name].join(' ') : name; } };
Element.prototype.removeClassName = function(name) {if (this.hasClassName(name)) {var c = this.className; this.className = c.replace(new RegExp("(?:^|\\s+)" + name + "(?:\\s+|$)", "g"), ""); } };

var nivel = 0;
(function() {
	palabrear();
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
    	if(dragSrcEl_.getAttribute('data-type') == this.getAttribute('data-type')){
    		//dragSrcEl_.innerHTML = this.
    		//this.innerHTML = dragSrcEl_.getAttribute('data-letra');

    		var tpl = '<li class="nicdark_border_grey"> <div class="nicdark_margin10"> <p><i class="icon-right-open-outline"></i>&nbsp;<a class="black" href="javascript:void(0)">'+dragSrcEl_.innerHTML+'</a></p> </div> </li>';
    		$("#list-"+this.getAttribute('data-type')).append(tpl);

    		nivel++;
    		if(nivel == 10){
    			$("#correcto").removeClass('hide');
    		}else{
    			palabrear();
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
@endsection