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

		<div class="nicdark_space50"></div>

		<div class="grid grid_8">
			<div class="nicdark_space50"></div>

			<h1 class="subtitle greydark">Sumar:</h1>
			<div class="nicdark_space20"></div>
			<div class="nicdark_divider left small"><span class="nicdark_bg_yellow nicdark_radius"></span></div>
			<div class="nicdark_space20"></div>

			<div class="nicdark_space50"></div>	

			<div class="row">

				<div class="grid grid_10">

					<div class="grid grid_8" align="center">
						<div class="operacion">5 + 10 = ?</div>
						<hr>
					</div>

					<div class="grid grid_6 fallas">
						<div class="nicdark_alerts nicdark_bg_red nicdark_radius nicdark_shadow">
							<p class="white nicdark_size_medium">&nbsp;&nbsp;&nbsp;18+3 = ?</p>
							<i class="icon-warning-empty nicdark_iconbg right medium red"></i>
						</div>
					</div>
					<div class="grid grid_2 ">

						<div class="nicdark_margin100">
							<span id="reloj" class="nicdark_btn nicdark_bg_orange medium nicdark_radius white"><i class="icon-stopwatch"></i>&nbsp;&nbsp;60 seg</span>
						</div>

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

