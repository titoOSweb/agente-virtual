@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/css/primer-grado.css">
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
				<h3 class="subtitle white">FIGURAS MAS LETRAS</h3>
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

			<h1 class="subtitle greydark">Coloca la imagen en la letra indicada:</h1>
			<div class="nicdark_space20"></div>
			<div class="nicdark_divider left small"><span class="nicdark_bg_yellow nicdark_radius"></span></div>
			<div class="nicdark_space20"></div>

			<div class="row">

				<div id="imagen" class="grid grid_8 center" align="center">
					<img src="" alt="" id="figura">
					<hr>
				</div>


				<div class="grid grid_8 center" align="center">
					<a href="#" class="extrasize nicdark_width50 nicdark_btn nicdark_bg_blue medium nicdark_shadow nicdark_radius white nicdark_margin10">A</a>
					<a href="#" class="extrasize nicdark_width50 nicdark_btn nicdark_bg_red medium nicdark_shadow nicdark_radius white nicdark_margin10">E</a>
					<a href="#" class="extrasize nicdark_width50 nicdark_btn nicdark_bg_yellow medium nicdark_shadow nicdark_radius white nicdark_margin10">I</a>
					<a href="#" class="extrasize nicdark_width50 nicdark_btn nicdark_bg_orange medium nicdark_shadow nicdark_radius white nicdark_margin10">O</a>
					<a href="#" class="extrasize nicdark_width50 nicdark_btn nicdark_bg_green medium nicdark_shadow nicdark_radius white nicdark_margin10">U</a>
				</div>

				<div id="figuras-mas-letras" class="grid grid_6">
					


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
	<script src="/js/figuras-mas-letras.js"> </script>	
@endsection