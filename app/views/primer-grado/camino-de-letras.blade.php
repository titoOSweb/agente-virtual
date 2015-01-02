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
				<h3 class="subtitle white">CAMINO DE LETRAS</h3>
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

			<h1 class="subtitle greydark">Coloca la letra en la palabra indicada:</h1>
			<div class="nicdark_space20"></div>
			<div class="nicdark_divider left small"><span class="nicdark_bg_yellow nicdark_radius"></span></div>
			<div class="nicdark_space20"></div>

			<div class="row">


				<div id="big-letra" class="grid grid_1 center" align="center">
					<a href="javascript:void(0)" class="letras-abecedario extrasize nicdark_width50 nicdark_btn nicdark_bg_blue medium nicdark_shadow nicdark_radius white nicdark_margin10">B</a>
				</div>

				<div id="camino-de-letras" class="grid grid_6">
					<div>
						<span class="falta"></span>
						<span>A</span>
						<span>R</span>
						<span>C</span>
						<span>O</span>
					</div>

					<div>
						<span>A</span>
						<span class="falta"></span>
						<span>U</span>
						<span>E</span>
						<span>L</span>
						<span>A</span>
					</div>

					<div>
						<span class="falta"></span>
						<span>O</span>
						<span>M</span>
						<span class="falta"></span>
						<span>E</span>
						<span>R</span>
						<span>O</span>
					</div>

					<div>
						<span>S</span>
						<span>O</span>
						<span>M</span>
						<span class="falta"></span>
						<span>R</span>
						<span>E</span>
						<span>R</span>
						<span class="falta"></span>
					</div>

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
	<script src="/js/camino-de-letras.js"> </script>	
@endsection