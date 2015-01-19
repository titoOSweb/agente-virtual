@extends('layouts.master')

@section('css')
<style>
#AgenteEd{
	z-index: 10;
	position: fixed; /* or absolute */
	top: 30%;
	right: 10%;
}
</style>
@endsection

@section('content')

<!--start section-->
<section class="nicdark_section">
	<div class="nicdark_margin10" id="AgenteEd"></div>
	<div class="tp-banner-container">
		<div class="nicdark_slide1" >

			<ul>


				<!--start first-->
				<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="">
					
					<img src="img/slide/img3.jpg"  alt="" data-lazyload="img/slide/img3.jpg" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
				</li>
				<!--end first-->


				<!--start second-->
				<li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on"  data-title="">
					<img src="img/slide/img8.jpg"  alt="" data-lazyload="img/slide/img8.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
				</li>
				<!--end second-->

			</ul>

		</div>
	</div>

</section>
<!--end section-->
<!--start section-->


<div class="nicdark_space20"></div>


@endsection


@section('js')
<script>
$( window ).load(function() {
	Agente.prepare('bienvenido');

	setTimeout(function(){
		Agente.prepare('seleccionaUnGrado');
	},5000)
});
</script>
@endsection