<div class="nicdark_section nicdark_navigation fade-down">

	<div class="nicdark_menu_boxed">

		<div class="nicdark_section nicdark_bg_greydark nicdark_displaynone_responsive">
			<div class="nicdark_container nicdark_clearfix">
				<div class="grid grid_6">

				</div>
				<div class="grid grid_6 right">
					<div class="nicdark_focus right">
						<h6 class="white">    

							@if(Auth::user())
							<i class="icon-user"></i>&nbsp;&nbsp;<a class="white" href="/dashboard">{{ Auth::user()->full_name }}</a>
							@else
							<i class="icon-lock-1"></i>&nbsp;&nbsp;<a class="white nicdark_mpopup_ajax" href="/auth/login/modal">LOG IN</a>
							@endif



						</h6>
					</div>
				</div>



			</div>
		</div>

		<div class="nicdark_space3 nicdark_bg_gradient"></div>

		<div class="nicdark_section nicdark_bg_grey nicdark_shadow nicdark_radius_bottom">
			<div class="nicdark_container nicdark_clearfix">

				<div class="grid grid_12 percentage">

					<div class="nicdark_space20"></div>

					<div class="nicdark_logo nicdark_marginleft10">
						<a href="/"><img alt="" src="/img/logo.png"></a>
					</div>


					<nav>
						<ul class="nicdark_menu nicdark_margin010 nicdark_padding50">

							<li class="orange">
								<a href="/">INICIO</a>								
							</li>

							<li class="yellow nicdark_megamenu">
								<a href="#">PRIMER GRADO</a>
								<ul class="sub-menu">
									<li class="mm_grid mm_grid_6">
										<ul class="sub-menu">
											<li>	
												<img src="/images/sidebar/abecedario.png" alt="">
												<a href="/primer-grado/aprende-el-abecedario">Aprende el abecedario</a>
											</li>
											<li>
												<img src="/images/sidebar/numeros.jpg" alt="">
												<a href="/primer-grado/aprende-los-numeros">Aprende los números</a>
											</li>
											<li>
												<img src="/images/sidebar/formas.jpg" alt="">
												<a href="/primer-grado/aprende-las-formas-geometricas">Aprende las formas geométricas</a>
											</li>
											<li>
												<img src="/images/sidebar/computador.png" alt="">
												<a href="/primer-grado/partes-computador">Conoce las partes del computador</a>
											</li>											
										</ul>
									</li>
									
									<li class="mm_grid mm_grid_6">
										<ul class="sub-menu">
											<li>
												<img src="/images/sidebar/adivina.jpg" alt="">
												<a href="/primer-grado/adivina-la-palabra">Adivina la palabra</a>
											</li>
											<li>
												<img src="/images/sidebar/forma.jpg" alt="">
												<a href="/primer-grado/formando-palabras">Formando palabras</a>
											</li>
											<li>
												<img src="/images/sidebar/camino.jpg" alt="">
												<a href="/primer-grado/camino-de-letras">Camino de letras</a>
											</li>
											<li>
												<img src="/images/sidebar/vocales.jpg" alt="">
												<a href="/primer-grado/figuras-mas-letras">Figuras + Letras</a>
											</li>
										</ul>
									</li>									
								</ul>
							</li>
							
							<li class="blue nicdark_megamenu">
								<a href="#">SEGUNDO GRADO</a>
								<ul class="sub-menu">
									<li class="mm_grid mm_grid_6">
										<ul class="sub-menu">
											<li>
												<img src="/images/sidebar/pys.jpg" alt="">
												<a href="/segundo-grado/singular-y-plural">Singular y Plural</a>
											</li>
											<li>
												<img src="/images/sidebar/palabra.png" alt="">
												<a href="/segundo-grado/cada-palabra-en-su-lugar">Cada palabra en su lugar</a>
											</li>
											<li>
												<img src="/images/sidebar/letra.png" alt="">
												<a href="/segundo-grado/caminos-de-flechas">Cada letra en su lugar</a>
											</li>
											<li>
												<img src="/images/sidebar/numeross.jpg" alt="">
												<a href="/segundo-grado/ordena-los-numeros">Ordena los números</a>
											</li>
										</ul>
									</li>
									
									<li class="mm_grid mm_grid_6">
										<ul class="sub-menu">
											<li>
												<img src="/images/sidebar/mayorymenor.jpg" alt="">
												<a href="/segundo-grado/mayor-que-menor-que">"Mayor que", "Menor que"</a>
											</li>
											<li>
												<img src="/images/sidebar/arnumeros.jpg" alt="">
												<a href="/segundo-grado/arrastra-los-numeros">Arrastra los números</a>
											</li>
											<li>
												<img src="/images/sidebar/suma.png" alt="">
												<a href="/segundo-grado/a-sumar">A Sumar!</a>
											</li>
											<li>
												<img src="/images/sidebar/resta.png" alt="">
												<a href="/segundo-grado/a-restar">A Restar!</a>
											</li>
										</ul>
									</li>									
								</ul>
							</li>

							<li class="red nicdark_megamenu">
								<a href="#">TERCER GRADO</a>
								<ul class="sub-menu">
									<li class="mm_grid mm_grid_6">
										<ul class="sub-menu">
											<li>
												<img src="/images/sidebar/sopa.png" alt="">
												<a href="/tercer-grado/sustantivos">Sustantivos</a>
											</li>
											<li>
												<img src="/images/sidebar/dameros.png" alt="">
												<a href="/tercer-grado/dameros">Dameros</a>
											</li>
											<li>
												<img src="/images/sidebar/silabas.png" alt="">
												<a href="/tercer-grado/silabas">Sílabas</a>
											</li>
											<li>
												<img src="/images/sidebar/familia.jpg" alt="">
												<a href="/tercer-grado/familia-de-palabras">Familia de palabras</a>
											</li>
										</ul>
									</li>
									
									<li class="mm_grid mm_grid_6">
										<ul class="sub-menu">
											<li>
												<img src="/images/sidebar/suma.png" alt="">
												<a href="/tercer-grado/a-sumar">A Sumar!</a>
											</li>
											<li>
												<img src="/images/sidebar/resta.png" alt="">
												<a href="/tercer-grado/a-restar">A Restar!</a>
											</li>
											<li>
												<img src="/images/sidebar/multiplica.jpg" alt="">
												<a href="/tercer-grado/a-multiplicar">A Multiplicar!</a>
											</li>
										</ul>
									</li>									
								</ul>
							</li>


							
							
							<li class="grey">
								<a href="/manual/">MANUAL</a>
							</li>
						</ul>
					</nav>

					<div class="nicdark_space20"></div>

				</div>

			</div>
			<!--end container-->

		</div>
		<!--end header-->

	</div>

</div>
