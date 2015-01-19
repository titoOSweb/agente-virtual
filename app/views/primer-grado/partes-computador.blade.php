@extends('layouts.master')

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
				<h3 class="subtitle white">CONOCE LAS PARTES DEL COMPUTADOR</h3>
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

			<h1 class="subtitle greydark">Seleccione una parte:</h1>
			<div class="nicdark_space20"></div>
			<div class="nicdark_divider left small"><span class="nicdark_bg_yellow nicdark_radius"></span></div>
			<div class="nicdark_space20"></div>

			<div class="row">

				<?php 	
				$index = 0; 
				$class="nicdark_bg_yellow"; 
				?>
				@foreach ($partes as $parte) 
				@if($index == 0)
				<?php $class="nicdark_bg_green"; ?>				
				@elseif($index == 1)
				<?php $class="nicdark_bg_blue"; ?>	
				@elseif($index == 2)
				<?php $class="nicdark_bg_violet"; ?>	
				@elseif($index == 3)
				<?php $class="nicdark_bg_red"; ?>	
				<?php $index = -1; ?>					
				@endif

				<a href="javascript:void(0)" data-letra="{{ $parte['parte'] }}" data-imagen="/images/primer-grado/partes-computador/{{ $parte['imagen'] }}" 
				data-descripcion="{{ $parte['parte'] }}" class="partes-computador extrasize nicdark_btn {{ $class }} medium 
				nicdark_shadow nicdark_radius white nicdark_margin20"> 	{{ $parte['parte'] }} </a>

				<?php $index++; ?>
				@endforeach



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
	<script>
	$( window ).load(function() {
		Agente.prepare('introLevel4');
	});
	</script>
@endsection