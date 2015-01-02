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
				<h3 class="subtitle white">"MAYOR QUE", "MENOR QUE"</h3>
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
					
				<div class="grid grid_8 center" align="center">
					<div class="numeromm">12</div>
					<a href="#" class="nicdark_width50 nicdark_btn nicdark_bg_red extrasize  nicdark_radius white nicdark_margin10">?</a>
					<div class="numeromm">64</div>
					<hr>
				</div>

				<div class="grid grid_8 center" align="center">
					<a href="#" title="Mayor que" class="nicdark_width50 nicdark_btn nicdark_bg_blue extrasize nicdark_radius white nicdark_margin10">></a>
					<a href="#" title="Menor que" class="nicdark_width50 nicdark_btn nicdark_bg_green extrasize  nicdark_radius white nicdark_margin10"><</a>
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

