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
				<h3 class="subtitle white">SUSTANTIVOS</h3>
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

			<h1 class="subtitle greydark">Sopa de letra:</h1>
			<div class="nicdark_space20"></div>
			<div class="nicdark_divider left small"><span class="nicdark_bg_yellow nicdark_radius"></span></div>
			<div class="nicdark_space20"></div>

			<div class="row">

				


				<div class="grid grid_12" align="left">

					<div class="grid grid_2">
						<h3>Palabras:</h3>
						<div class="nicdark_space10"></div>
						<div class="nicdark_divider left small"><span class="nicdark_bg_blue nicdark_radius"></span></div>
						<div class="nicdark_space20"></div>

						<ul id="palabras">
														
						</ul>

						<div class="nicdark_margin100">
							<span id="reloj" class="nicdark_btn nicdark_bg_orange medium nicdark_radius white"><i class="icon-stopwatch"></i>&nbsp;&nbsp;120 seg</span>
						</div>

					</div>
					
					<div id="sopa" class="grid grid_6">
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
	<script src="/js/plugins/jquery.sopaletras.js"></script>

<script type="text/javascript">
	$(function(){
	 var sopaoption = {
                    vertical: 'S',
                    onWin: "mostrarTodo"
                };
		$("#sopa").SopaLetras(sopaoption);
		$("#sopa").SopaLetras("enabled");
	});
</script>
@endsection