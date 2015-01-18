@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/css/tercer-grado.css">
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
				<h1 class="white subtitle">TERCER GRADO</h1>
				<div class="nicdark_space10"></div>
				<h3 class="subtitle white">FAMILIA DE PALABRAS</h3>
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

			<h1 class="subtitle greydark">Haz doble clic a las palabras que pertenecen a la misma familia:</h1>
			<div class="nicdark_space20"></div>
			<div class="nicdark_divider left small"><span class="nicdark_bg_yellow nicdark_radius"></span></div>
			<div class="nicdark_space20"></div>


			<div class="row" id="step-1">
				<div class="nicdark_alerts nicdark_bg_red nicdark_radius nicdark_shadow" id="win">
					<p class="white nicdark_size_medium"><strong>Ejemplo:</strong> Casa/Casita/Caserón/Casona/Casucha/Caserio</p>
					<i class="icon-warning-empty nicdark_iconbg right medium orange"></i>
				</div>

				<div class="grid grid_8"><hr></div>
				<div id="familias" class="grid grid_8 center" align="center"></div>
			
				<div class="grid grid_8"><hr></div>
				<a href="/" style="font-size:12px" class=" nicdark_btn nicdark_bg_red  nicdark_shadow nicdark_radius white nicdark_margin10">Salir	</a>

				<div class="grid grid_8">
					<div class="nicdark_textevidence center">
						<a href="#" class="nicdark_zoom nicdark_btn nicdark_bg_blue extrasize nicdark_shadow nicdark_radius white nicdark_margin10" id="verbo"></a>
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
@endsection

@section('js')
	<script src="/js/familia.js"></script>
@endsection