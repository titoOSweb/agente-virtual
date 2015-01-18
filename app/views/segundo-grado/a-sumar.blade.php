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
				<h3 class="subtitle white">A SUMAR!</h3>
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

		<div class="grid grid_8">
			<div class="row">

				<div class="grid grid_8">


					<div class="grid grid_3 ">
						<div class="nicdark_alerts nicdark_bg_red nicdark_radius nicdark_shadow">
							<p class="white nicdark_size_medium"><i class="icon-cancel-circled-outline iconclose"></i>&nbsp;&nbsp;&nbsp;<strong>Incorrectas:</strong>&nbsp;&nbsp;&nbsp;<span id="incorrectas">0</span></p>
							<i class="icon-cancel-outline nicdark_iconbg right medium red"></i>
						</div>
					</div>

					<div class="grid grid_3 right" style="float:right">
						<div class="nicdark_alerts nicdark_bg_green nicdark_radius nicdark_shadow">
							<p class="white nicdark_size_medium"><i class="icon-cancel-circled-outline iconclose"></i>&nbsp;&nbsp;&nbsp;<strong>Correctas:</strong>&nbsp;&nbsp;&nbsp;<span id="correctas">0</span></p>
							<i class="icon-cancel-outline nicdark_iconbg right medium green"></i>
						</div>
					</div>


				</div>

				<div class="grid grid_8 hide nicdark_textevidence nicdark_width_percentage100" id="correcto">
				<div class="nicdark_textevidence nicdark_relative"> <a href="#" class="nicdark_btn_icon nicdark_bg_green extrabig nicdark_radius white nicdark_absolute nicdark_shadow"><i class="icon-ok big"></i></a>
					<div class="nicdark_activity nicdark_marginleft100">
						<h1 style="font-size:60px;padding-top:10px">Puedes continuar</h1>
						<div class="nicdark_space20"></div> <a href="/" class="nicdark_btn grey next-word"><i class="icon-right-open-outline"></i> Siguiente</a> 
					</div>
					<div class="nicdark_space20"></div>
					<div class="nicdark_space20"></div>
				</div>
			</div>

				<div class="grid grid_10" id="operandos">

					

					<div class="grid grid_8" align="center">
						<hr>
						<div class="numeromm" id="n1"></div>
						<a href="#" class="nicdark_width50 nicdark_btn nicdark_bg_green extrasize  nicdark_radius white nicdark_margin10">+</a>
						<div class="numeromm" id="n2"></div>
						<a href="#" class="nicdark_width50 nicdark_btn nicdark_bg_blue extrasize  nicdark_radius white nicdark_margin10">=</a>
						<div class="numeromm">?</div>
						<hr>
					</div>

					<div class="grid grid_6 fallas">
						<div class="grid grid_3">
							<input type="text" class="grande">
						</div>
						<div class="grid grid_2">
							<div class="nicdark_space20"></div>
							<span id="validar" class="nicdark_btn nicdark_bg_green medium nicdark_radius white"><i class="icon-ok"></i>&nbsp;&nbsp; Validar</span>
						</div>
					</div>
					<div class="grid grid_2" id="watch">

						

					</div>
					
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
<input type="hidden" id="dificultad" value="10">
<input type="hidden" id="tiempo" value="30">
@endsection

@section('js')
<script src="/js/sumar.js"></script>
@endsection
