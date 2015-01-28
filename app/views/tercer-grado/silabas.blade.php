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
				<h3 class="subtitle white">SÍLABAS</h3>
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

			<h1 class="subtitle greydark">Separa en Sílabas:</h1>
			<div class="nicdark_space20"></div>
			<div class="nicdark_divider left small"><span class="nicdark_bg_yellow nicdark_radius"></span></div>
			<div class="nicdark_space20"></div>


			<div class="row" id="intro">
				
				<div class="nicdark_textevidence nicdark_bg_grey nicdark_shadow nicdark_radius grid grid_8">  
					<table class="nicdark_table extrabig nicdark_bg_blue nicdark_radius ">
						<thead class="nicdark_border_blue">
							<tr>
								<td><h4 class="white">Categorías de sílabas:</h4></td>
								<td class="nicdark_width_percentage1"></td>
							</tr>
						</thead>
						<tbody class="nicdark_bg_grey nicdark_border_grey">
							<tr>
								<td><p><strong>Monosílaba:</strong>&nbsp;&nbsp;&nbsp; 1 sílaba &nbsp;&nbsp;&nbsp;<strong>PEZ</strong><strong style="float:right">PEZ</strong></p></td>
								<td><a href="#" class="nicdark_btn_icon nicdark_bg_green small nicdark_radius_circle white"><i class="icon-ok-outline"></i></a></td>
							</tr>
							<tr>
								<td><p><strong>Bisílaba:</strong>&nbsp;&nbsp;&nbsp; 2 sílabas &nbsp;&nbsp;&nbsp;<strong>RELOJ</strong> <strong style="float:right">RE-LOJ</strong> </p> </td>
								<td><a href="#" class="nicdark_btn_icon nicdark_bg_green small nicdark_radius_circle white"><i class="icon-ok-outline"></i></a></td>
							</tr>
							<tr>
								<td><p><strong>Trisílaba:</strong>&nbsp;&nbsp;&nbsp; 3 sílabas &nbsp;&nbsp;&nbsp;<strong>PARAGUAS</strong> <strong style="float:right">PA-RA-GUAS</strong> </p> </td>
								<td><a href="#" class="nicdark_btn_icon nicdark_bg_green small nicdark_radius_circle white"><i class="icon-ok-outline"></i></a></td>
							</tr>

							<tr>
								<td><p><strong>Polisílaba:</strong>&nbsp;&nbsp;&nbsp; 4 sílabas &nbsp;&nbsp;&nbsp;<strong>MARIPOSA</strong> <strong style="float:right">MA-RI-PO-SA</strong> </p> </td>
								<td><a href="#" class="nicdark_btn_icon nicdark_bg_green small nicdark_radius_circle white"><i class="icon-ok-outline"></i></a></td>
							</tr>

							<tr>
								<td colspan="2"><a href="#" id="continuar" class="nicdark_btn_icon nicdark_bg_green big nicdark_radius white right">Continuar <i class="icon-forward"></i></a></td>
							</tr>

						</tbody>
					</table>
				</div>

			</div>

			<div class="row hide" id="game">

				<div id="adivina" class="grid grid_8 center" align="center">
					<div class="grid grid_2"></div>
					<img src="" alt="" id="image" class="grid grid_3 center">
					<div class="grid grid_2"></div>
					
				</div>
			
				<div class="grid grid_8"><hr></div>

				<div id="silabas" class="grid grid_7" align="center">
										
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
	<script src="/js/silabas.js"></script>
@endsection