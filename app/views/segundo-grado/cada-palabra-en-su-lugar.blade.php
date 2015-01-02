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
					<h1>VACA</h1>
					<hr>
				</div>


				<div class="grid grid_10 center" align="center" id="lugar">
					
					<div class="grid_2 nicdark_bg_yellow">
						
						<div class="nicdark_textevidence nicdark_bg_greydark">
							<h4 class="white nicdark_margin10">NOMBRES</h4>
							<input class="nicdark_bg_grey2 grey small subtitle" type="text" value="" placeholder="Escribir...">
							<a href="#" class="nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white nicdark_margin10"><i class="icon-check "></i>&nbsp;&nbsp;&nbsp;COMPROBAR</a>
						</div>
					</div>

					<div class="grid_2 nicdark_bg_blue">
						<div class="nicdark_textevidence nicdark_bg_greydark">
							<h4 class="white nicdark_margin10">JUGUETES</h4>
							<input class="nicdark_bg_grey2 grey small subtitle" type="text" value="" placeholder="Escribir...">
							<a href="#" class="nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white nicdark_margin10"><i class="icon-check "></i>&nbsp;&nbsp;&nbsp;COMPROBAR</a>
						</div>
					</div>

					<div class="grid_2 nicdark_bg_red">
						<div class="nicdark_textevidence nicdark_bg_greydark">
							<h4 class="white nicdark_margin10">ANIMALES</h4>
							<input class="nicdark_bg_grey2 grey small subtitle" type="text" value="" placeholder="Escribir...">
							<a href="#" class="nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white nicdark_margin10"><i class="icon-check "></i>&nbsp;&nbsp;&nbsp;COMPROBAR</a>
						</div>
					</div>

					<div class="grid_2 nicdark_bg_green">
						<div class="nicdark_textevidence nicdark_bg_greydark">
							<h4 class="white nicdark_margin10">FRUTAS</h4>
							<input class="nicdark_bg_grey2 grey small subtitle" type="text" value="" placeholder="Escribir...">
							<a href="#" class="nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white nicdark_margin10"><i class="icon-check "></i>&nbsp;&nbsp;&nbsp;COMPROBAR</a>
						</div>
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

