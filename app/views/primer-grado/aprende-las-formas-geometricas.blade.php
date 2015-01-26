@extends('layouts.master')

@section('css')
<style>
#cuadrado{
	width: 100px;
	height: 100px;
	background: #ffffff;
}
#rectangulo{
	width: 200px;
	height: 100px;
	background: #ffffff;
}
#circulo {
	width: 100px;
	height: 100px;
	background: #ffffff;
	-moz-border-radius: 50px;
	-webkit-border-radius: 50px;
	border-radius: 50px;
}
#ovalo {
	width: 200px;
	height: 100px;
	background: #ffffff;
	-moz-border-radius: 100px / 50px;
	-webkit-border-radius: 100px / 50px;
	border-radius: 100px / 50px;
}
#triangulo{
	width: 0;
	height: 0;
	border-left: 50px solid transparent;
	border-right: 50px solid transparent;
	border-bottom: 100px solid #ffffff;
}

#pentagono {
	position: relative;
	width: 54px;
	border-width: 50px 18px 0;
	border-style: solid;
	border-color: #ffffff transparent;
	margin: 50px auto 20px
}
#pentagono:before {
	content: "";
	position: absolute;
	height: 0;
	width: 0;
	top: -85px;
	left: -18px;
	border-width: 0 45px 35px;
	border-style: solid;
	border-color: transparent transparent #ffffff;
}
#hexagono {
	width: 100px;
	height: 55px;
	background: #ffffff;
	position: relative;
	margin: 40px auto 20px;
}
#hexagono:before {
	content: "";
	position: absolute;
	top: -25px;
	left: 0;
	width: 0;
	height: 0;
	border-left: 50px solid transparent;
	border-right: 50px solid transparent;
	border-bottom: 25px solid #ffffff;
}
#hexagono:after {
	content: "";
	position: absolute;
	bottom: -25px;
	left: 0;
	width: 0;
	height: 0;
	border-left: 50px solid transparent;
	border-right: 50px solid transparent;
	border-top: 25px solid #ffffff;
}
#octagono {
	width: 100px;
	height: 100px;
	background: white;
	position: relative;
}

#octagono:before {
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	border-bottom: 29px solid white;
	border-left: 29px solid #6fc191;
	border-right: 29px solid #6fc191;
	width: 42px;
	height: 0;
}

#octagono:after {
	content: "";
	position: absolute;
	bottom: 0;
	left: 0;
	border-top: 29px solid white;
	border-left: 29px solid #6fc191;
	border-right: 29px solid #6fc191;
	width: 42px;
	height: 0;
}

#rombo {
	width: 0;
	height: 0;
	border: 50px solid transparent;
	border-bottom-color: #ffffff;
	position: relative;
	top: -50px;
}
#rombo:after {
	content: '';
	position: absolute;
	left: -50px;
	top: 50px;
	width: 0;
	height: 0;
	border: 50px solid transparent;
	border-top-color: #ffffff;
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
				<h3 class="subtitle white">APRENDE LAS FORMAS GEOMETRICAS</h3>
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

			<h1 class="subtitle greydark">Seleccione una forma geométrica:</h1>
			<div class="nicdark_space20"></div>
			<div class="nicdark_divider left small"><span class="nicdark_bg_yellow nicdark_radius"></span></div>
			<div class="nicdark_space20"></div>

			<div class="row">
				<a href="javascript:void(0)" data-imagen="/images/primer-grado/formas-geometricas/1.gif" data-agente="Circulo" data-descripcion="Circulo" class="formas-geometricas extrasize nicdark_btn nicdark_bg_green medium nicdark_shadow nicdark_radius white nicdark_margin20"> 	<div id="circulo" class="margen"></div> </a>
				<a href="javascript:void(0)" data-imagen="/images/primer-grado/formas-geometricas/2.gif" data-agente="Ovalo" data-descripcion="Ovalo" class="formas-geometricas extrasize nicdark_btn nicdark_bg_blue medium nicdark_shadow nicdark_radius white nicdark_margin20"> 		<div id="ovalo" class="margen"></div> </a>
				<a href="javascript:void(0)" data-imagen="/images/primer-grado/formas-geometricas/3.gif" data-agente="Triangulo" data-descripcion="Triangulo" class="formas-geometricas extrasize nicdark_btn nicdark_bg_violet medium nicdark_shadow nicdark_radius white nicdark_margin20"><div id="triangulo" class="margen"></div> </a>
				<a href="javascript:void(0)" data-imagen="/images/primer-grado/formas-geometricas/4.gif" data-agente="Cuadrado" data-descripcion="Cuadrado" class="formas-geometricas extrasize nicdark_btn nicdark_bg_red medium nicdark_shadow nicdark_radius white nicdark_margin20">	<div id="cuadrado" class="margen"></div> </a>
				<a href="javascript:void(0)" data-imagen="/images/primer-grado/formas-geometricas/5.gif" data-agente="Rectangulo" data-descripcion="Rectangulo" class="formas-geometricas extrasize nicdark_btn nicdark_bg_green medium nicdark_shadow nicdark_radius white nicdark_margin20"><div id="rectangulo" class="margen"></div> </a>
				<a href="javascript:void(0)" data-imagen="/images/primer-grado/formas-geometricas/6.gif" data-agente="Rombo" data-descripcion="Rombo" class="formas-geometricas extrasize nicdark_btn nicdark_bg_blue medium nicdark_shadow nicdark_radius white nicdark_margin20">		<div id="rombo" class="margen"></div> </a>
				<a href="javascript:void(0)" data-imagen="/images/primer-grado/formas-geometricas/7.gif" data-agente="Pentagono" data-descripcion="Pentagono" class="formas-geometricas extrasize nicdark_btn nicdark_bg_violet medium nicdark_shadow nicdark_radius white nicdark_margin20"><div id="pentagono" class="margen"></div> </a>
				<a href="javascript:void(0)" data-imagen="/images/primer-grado/formas-geometricas/8.gif" data-agente="Hexagono" data-descripcion="Hexagono" class="formas-geometricas extrasize  nicdark_btn nicdark_bg_red medium nicdark_shadow nicdark_radius white nicdark_margin20">	<div id="hexagono" class="margen"></div> </a>
				<a href="javascript:void(0)" data-imagen="/images/primer-grado/formas-geometricas/9.gif" data-agente="Octagono" data-descripcion="Octágono" class="formas-geometricas extrasize nicdark_btn nicdark_bg_green medium nicdark_shadow nicdark_radius white nicdark_margin20">	<div id="octagono" class="margen"></div> </a>
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
	<script>
	$( window ).load(function() {
		Agente.prepare('introLevel3');
	});
	</script>
@endsection