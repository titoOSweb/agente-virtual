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
				<h3 class="subtitle white">CADA LETRA EN SU LUGAR</h3>
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
				<div id="camino-de-letras" class="grid grid_6" align="center">
					<div>
						<span>A</span>
						<span>R</span>
						<span>B</span>
						<span>O</span>
						<span>L</span>
					</div>
					<hr>
				</div>

				<div class="grid grid_8 center" align="center">
					<a href="#" class="big nicdark_width20 nicdark_btn nicdark_bg_blue nicdark_radius white nicdark_margin10">B</a>
					<a href="#" class="big nicdark_width20 nicdark_btn nicdark_bg_blue nicdark_radius white nicdark_margin10">A</a>
					<a href="#" class="big nicdark_width20 nicdark_btn nicdark_bg_blue nicdark_radius white nicdark_margin10">L</a>
					<a href="#" class="big nicdark_width20 nicdark_btn nicdark_bg_blue nicdark_radius white nicdark_margin10">O</a>
					<a href="#" class="big nicdark_width20 nicdark_btn nicdark_bg_blue nicdark_radius white nicdark_margin10">R</a>
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

