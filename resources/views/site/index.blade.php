@extends('templates.menu')

@section('title')
    Home
@stop

@section('content')
	<div class="slider-container rev_slider_wrapper">
			<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 500}">
				<ul>
					<li data-transition="fade">
						<img src="img/custom-header-bg.jpg"  
							alt=""
							data-bgposition="center center" 
							data-bgfit="cover" 
							data-bgrepeat="no-repeat" 
							class="rev-slidebg">

						
					</li>
					<li data-transition="fade">
						<img src="img/custom-header-bg1.jpg"  
							alt=""
							data-bgposition="center center" 
							data-bgfit="cover" 
							data-bgrepeat="no-repeat" 
							class="rev-slidebg">


					</li> 
				</ul>
			</div>
		</div>

		<br>

		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="owl-carousel owl-theme" data-plugin-options="{'items': 4, 'margin': 20, 'loop': false}">

						<div class="portfolio-item">
							<a href="#popupProject" data-portfolio-on-modal>
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project.jpg" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Evento 1</span>
											<span class="thumb-info-type">Música</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-plus-square"></i></span>
										</span>
									</span>
								</span>
							</a>
							<!-- Popup Project - Start -->
							<div id="popupProject" class="popup-inline-content">
								<div class="row">
									<div class="col-md-12">
										<div class="portfolio-title">
											<div class="row">
												<div class="portfolio-nav-all col-md-1">
													<a href="#" data-portfolio-close><i class="fa fa-th"></i></a>
												</div>
												<div class="col-md-10 center">
													<h2 class="mb-none">Bloco Vai Safadão em Florianópolis/SC
</h2>
												</div>
												<div class="portfolio-nav col-md-1">
													<a href="#" data-portfolio-prev class="portfolio-nav-prev"><i class="fa fa-chevron-left"></i></a>
													<a href="#" data-portfolio-next class="portfolio-nav-next"><i class="fa fa-chevron-right"></i></a>
												</div>
											</div>
										</div>

										<hr class="tall">
									</div>
								</div>

								<div class="row mb-xl">
									<div class="col-md-4">

										<span class="img-thumbnail">
											<img alt="" class="img-responsive" src="img/projects/project.jpg">
										</span>

									</div>

									<div class="col-md-8">

										<div class="portfolio-info">
											<div class="row">
												<div class="col-md-12 center">
													<ul>
														<li>
															<a href="#" data-tooltip data-original-title="Like"><i class="fa fa-heart"></i>14</a>
														</li>
														<li>
															<i class="fa fa-calendar"></i> 01 Janeiro 2017
														</li>
														<li>
															<i class="fa fa-tags"></i> <a href="#">Música</a>, <a href="#">Show</a>
														</li>
													</ul>
												</div>
											</div>
										</div>

										<h5 class="mt-sm">Descrição do evento</h5>
										<p class="mt-xlg">





O projeto Bloco Vai Safadão chega a Florianópolis pela primeira vez, após passar pelas maiores capitais do país. Em formato único, com trio elétrico e abadás, o cantor Wesley Safadão arrasta a multidão com músicas como “Ninguém é de ferro”, “Olha a Explosão” e “Você Partiu meu Coração”.

<br><br>
Classificação: 16 anos<ul><li>
Menores de 16 anos não terão acesso ao evento.</li></ul>

Observação
<br><br><ul><li>
Setor Pista e Camarote possui abadá. </li><li>
Informações sobre retirada de abadás em breve.</li></ul>



</p>

										<a href="#" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Comprar Ingresso</a>

										

									</div>
								</div>
							</div>
							<!-- Popup Project - End -->
						</div>
						<div class="portfolio-item">
							<a href="#popupProject2" data-portfolio-on-modal>
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project.jpg" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Evento 2</span>
											<span class="thumb-info-type">Media</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-plus-square"></i></span>
										</span>
									</span>
								</span>
							</a>
							<!-- Popup Project 2 - Start -->
							<div id="popupProject2" class="popup-inline-content">
								<div class="row">
									<div class="col-md-12">
										<div class="portfolio-title">
											<div class="row">
												<div class="portfolio-nav-all col-md-1">
													<a href="#" data-portfolio-close><i class="fa fa-th"></i></a>
												</div>
												<div class="col-md-10 center">
													<h2 class="mb-none">Evento </h2>
												</div>
												<div class="portfolio-nav col-md-1">
													<a href="#" data-portfolio-prev class="portfolio-nav-prev"><i class="fa fa-chevron-left"></i></a>
													<a href="#" data-portfolio-next class="portfolio-nav-next"><i class="fa fa-chevron-right"></i></a>
												</div>
											</div>
										</div>

										<hr class="tall">
									</div>
								</div>

								<div class="row mb-xl">
									<div class="col-md-4">

										<div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
											<div>
												<span class="img-thumbnail">
													<img alt="" class="img-responsive" src="img/projects/project.jpg">
												</span>
											</div>
											<div>
												<span class="img-thumbnail">
													<img alt="" class="img-responsive" src="img/projects/project.jpg">
												</span>
											</div>
										</div>

									</div>

									<div class="col-md-8">

										<div class="portfolio-info">
											<div class="row">
												<div class="col-md-12 center">
													<ul>
														<li>
															<a href="#" data-tooltip data-original-title="Like"><i class="fa fa-heart"></i>14</a>
														</li>
														<li>
															<i class="fa fa-calendar"></i> 01 January 2017
														</li>
														<li>
															<i class="fa fa-tags"></i> <a href="#">Brand</a>, <a href="#">Design</a>
														</li>
													</ul>
												</div>
											</div>
										</div>

										<h5 class="mt-sm">Project Description</h5>
										<p class="mt-xlg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Suspendisse potenti. Proin quis eros odio, dapibus dictum mauris. Donec nisi libero, adipiscing id pretium eget, consectetur sit amet leo. Nam at eros quis mi egestas fringilla non nec purus.</p>

										<a href="#" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Live Preview</a>

										<ul class="portfolio-details">
											<li>
												<h5 class="mt-sm mb-xs">Skills</h5>

												<ul class="list list-inline list-icons">
													<li><i class="fa fa-check-circle"></i> Design</li>
													<li><i class="fa fa-check-circle"></i> HTML/CSS</li>
													<li><i class="fa fa-check-circle"></i> Javascript</li>
													<li><i class="fa fa-check-circle"></i> Backend</li>
												</ul>
											</li>
											<li>
												<h5 class="mt-sm mb-xs">Client</h5>
												<p>Okler Themes</p>
											</li>
										</ul>

									</div>
								</div>
							</div>
							<!-- Popup Project 2 - End -->
						</div>
						<div class="portfolio-item">
							<a href="#popupProject3" data-portfolio-on-modal>
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project.jpg" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Evento 3</span>
											<span class="thumb-info-type">Teatro</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-plus-square"></i></span>
										</span>
									</span>
								</span>
							</a>
							<!-- Popup Project 3 - Start -->
							<div id="popupProject3" class="popup-inline-content">
								<div class="row">
									<div class="col-md-12">
										<div class="portfolio-title">
											<div class="row">
												<div class="portfolio-nav-all col-md-1">
													<a href="#" data-portfolio-close><i class="fa fa-th"></i></a>
												</div>
												<div class="col-md-10 center">
													<h2 class="mb-none">Evento 3</h2>
												</div>
												<div class="portfolio-nav col-md-1">
													<a href="#" data-portfolio-prev class="portfolio-nav-prev"><i class="fa fa-chevron-left"></i></a>
													<a href="#" data-portfolio-next class="portfolio-nav-next"><i class="fa fa-chevron-right"></i></a>
												</div>
											</div>
										</div>

										<hr class="tall">
									</div>
								</div>

								<div class="row mb-xl">
									<div class="col-md-4">

										<span class="img-thumbnail">
											<img alt="" class="img-responsive" src="img/projects/project.jpg">
										</span>

									</div>

									<div class="col-md-8">

										<div class="portfolio-info">
											<div class="row">
												<div class="col-md-12 center">
													<ul>
														<li>
															<a href="#" data-tooltip data-original-title="Like"><i class="fa fa-heart"></i>14</a>
														</li>
														<li>
															<i class="fa fa-calendar"></i> 01 January 2017
														</li>
														<li>
															<i class="fa fa-tags"></i> <a href="#">Brand</a>, <a href="#">Design</a>
														</li>
													</ul>
												</div>
											</div>
										</div>

										<h5 class="mt-sm">Project Description</h5>
										<p class="mt-xlg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Suspendisse potenti. Proin quis eros odio, dapibus dictum mauris. Donec nisi libero, adipiscing id pretium eget, consectetur sit amet leo. Nam at eros quis mi egestas fringilla non nec purus.</p>

										<a href="#" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Live Preview</a>

										<ul class="portfolio-details">
											<li>
												<h5 class="mt-sm mb-xs">Skills</h5>

												<ul class="list list-inline list-icons">
													<li><i class="fa fa-check-circle"></i> Design</li>
													<li><i class="fa fa-check-circle"></i> HTML/CSS</li>
													<li><i class="fa fa-check-circle"></i> Javascript</li>
													<li><i class="fa fa-check-circle"></i> Backend</li>
												</ul>
											</li>
											<li>
												<h5 class="mt-sm mb-xs">Client</h5>
												<p>Okler Themes</p>
											</li>
										</ul>

									</div>
								</div>
							</div>
							<!-- Popup Project 3 - End -->
						</div>
						<div class="portfolio-item">
							<a href="#popupProject4" data-portfolio-on-modal>
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project.jpg" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Evento 4</span>
											<span class="thumb-info-type">Show</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-plus-square"></i></span>
										</span>
									</span>
								</span>
							</a>
							<!-- Popup Project 4 - Start -->
							<div id="popupProject4" class="popup-inline-content">
								<div class="row">
									<div class="col-md-12">
										<div class="portfolio-title">
											<div class="row">
												<div class="portfolio-nav-all col-md-1">
													<a href="#" data-portfolio-close><i class="fa fa-th"></i></a>
												</div>
												<div class="col-md-10 center">
													<h2 class="mb-none">Watch Mockup</h2>
												</div>
												<div class="portfolio-nav col-md-1">
													<a href="#" data-portfolio-prev class="portfolio-nav-prev"><i class="fa fa-chevron-left"></i></a>
													<a href="#" data-portfolio-next class="portfolio-nav-next"><i class="fa fa-chevron-right"></i></a>
												</div>
											</div>
										</div>

										<hr class="tall">
									</div>
								</div>

								<div class="row mb-xl">
									<div class="col-md-4">

										<span class="img-thumbnail">
											<img alt="" class="img-responsive" src="img/projects/project.jpg">
										</span>

									</div>

									<div class="col-md-8">

										<div class="portfolio-info">
											<div class="row">
												<div class="col-md-12 center">
													<ul>
														<li>
															<a href="#" data-tooltip data-original-title="Like"><i class="fa fa-heart"></i>14</a>
														</li>
														<li>
															<i class="fa fa-calendar"></i> 01 January 2017
														</li>
														<li>
															<i class="fa fa-tags"></i> <a href="#">Brand</a>, <a href="#">Design</a>
														</li>
													</ul>
												</div>
											</div>
										</div>

										<h5 class="mt-sm">Project Description</h5>
										<p class="mt-xlg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Suspendisse potenti. Proin quis eros odio, dapibus dictum mauris. Donec nisi libero, adipiscing id pretium eget, consectetur sit amet leo. Nam at eros quis mi egestas fringilla non nec purus.</p>

										<a href="#" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Live Preview</a>

										<ul class="portfolio-details">
											<li>
												<h5 class="mt-sm mb-xs">Skills</h5>

												<ul class="list list-inline list-icons">
													<li><i class="fa fa-check-circle"></i> Design</li>
													<li><i class="fa fa-check-circle"></i> HTML/CSS</li>
													<li><i class="fa fa-check-circle"></i> Javascript</li>
													<li><i class="fa fa-check-circle"></i> Backend</li>
												</ul>
											</li>
											<li>
												<h5 class="mt-sm mb-xs">Client</h5>
												<p>Okler Themes</p>
											</li>
										</ul>

									</div>
								</div>
							</div>
							<!-- Popup Project 4 - End -->
						</div>
						<div class="portfolio-item">
							<a href="#popupProject5" data-portfolio-on-modal>
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project.jpg" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Three Bottles</span>
											<span class="thumb-info-type">Logo</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-plus-square"></i></span>
										</span>
									</span>
								</span>
							</a>
							<!-- Popup Project 5 - Start -->
							<div id="popupProject5" class="popup-inline-content">
								<div class="row">
									<div class="col-md-12">
										<div class="portfolio-title">
											<div class="row">
												<div class="portfolio-nav-all col-md-1">
													<a href="#" data-portfolio-close><i class="fa fa-th"></i></a>
												</div>
												<div class="col-md-10 center">
													<h2 class="mb-none">Three Bottles</h2>
												</div>
												<div class="portfolio-nav col-md-1">
													<a href="#" data-portfolio-prev class="portfolio-nav-prev"><i class="fa fa-chevron-left"></i></a>
													<a href="#" data-portfolio-next class="portfolio-nav-next"><i class="fa fa-chevron-right"></i></a>
												</div>
											</div>
										</div>

										<hr class="tall">
									</div>
								</div>

								<div class="row mb-xl">
									<div class="col-md-4">

										<span class="img-thumbnail">
											<img alt="" class="img-responsive" src="img/projects/project.jpg">
										</span>

									</div>

									<div class="col-md-8">

										<div class="portfolio-info">
											<div class="row">
												<div class="col-md-12 center">
													<ul>
														<li>
															<a href="#" data-tooltip data-original-title="Like"><i class="fa fa-heart"></i>14</a>
														</li>
														<li>
															<i class="fa fa-calendar"></i> 01 January 2017
														</li>
														<li>
															<i class="fa fa-tags"></i> <a href="#">Brand</a>, <a href="#">Design</a>
														</li>
													</ul>
												</div>
											</div>
										</div>

										<h5 class="mt-sm">Project Description</h5>
										<p class="mt-xlg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Suspendisse potenti. Proin quis eros odio, dapibus dictum mauris. Donec nisi libero, adipiscing id pretium eget, consectetur sit amet leo. Nam at eros quis mi egestas fringilla non nec purus.</p>

										<a href="#" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Live Preview</a>

										<ul class="portfolio-details">
											<li>
												<h5 class="mt-sm mb-xs">Skills</h5>

												<ul class="list list-inline list-icons">
													<li><i class="fa fa-check-circle"></i> Design</li>
													<li><i class="fa fa-check-circle"></i> HTML/CSS</li>
													<li><i class="fa fa-check-circle"></i> Javascript</li>
													<li><i class="fa fa-check-circle"></i> Backend</li>
												</ul>
											</li>
											<li>
												<h5 class="mt-sm mb-xs">Client</h5>
												<p>Okler Themes</p>
											</li>
										</ul>

									</div>
								</div>
							</div>
							<!-- Popup Project 5 - End -->
						</div>
						<div class="portfolio-item">
							<a href="#popupProject5" data-portfolio-on-modal>
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project.jpg" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Three Bottles</span>
											<span class="thumb-info-type">Logo</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-plus-square"></i></span>
										</span>
									</span>
								</span>
							</a>
							<!-- Popup Project 5 - Start -->
							<div id="popupProject5" class="popup-inline-content">
								<div class="row">
									<div class="col-md-12">
										<div class="portfolio-title">
											<div class="row">
												<div class="portfolio-nav-all col-md-1">
													<a href="#" data-portfolio-close><i class="fa fa-th"></i></a>
												</div>
												<div class="col-md-10 center">
													<h2 class="mb-none">Three Bottles</h2>
												</div>
												<div class="portfolio-nav col-md-1">
													<a href="#" data-portfolio-prev class="portfolio-nav-prev"><i class="fa fa-chevron-left"></i></a>
													<a href="#" data-portfolio-next class="portfolio-nav-next"><i class="fa fa-chevron-right"></i></a>
												</div>
											</div>
										</div>

										<hr class="tall">
									</div>
								</div>

								<div class="row mb-xl">
									<div class="col-md-4">

										<span class="img-thumbnail">
											<img alt="" class="img-responsive" src="img/projects/project.jpg">
										</span>

									</div>

									<div class="col-md-8">

										<div class="portfolio-info">
											<div class="row">
												<div class="col-md-12 center">
													<ul>
														<li>
															<a href="#" data-tooltip data-original-title="Like"><i class="fa fa-heart"></i>14</a>
														</li>
														<li>
															<i class="fa fa-calendar"></i> 01 January 2017
														</li>
														<li>
															<i class="fa fa-tags"></i> <a href="#">Brand</a>, <a href="#">Design</a>
														</li>
													</ul>
												</div>
											</div>
										</div>

										<h5 class="mt-sm">Project Description</h5>
										<p class="mt-xlg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Suspendisse potenti. Proin quis eros odio, dapibus dictum mauris. Donec nisi libero, adipiscing id pretium eget, consectetur sit amet leo. Nam at eros quis mi egestas fringilla non nec purus.</p>

										<a href="#" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Live Preview</a>

										<ul class="portfolio-details">
											<li>
												<h5 class="mt-sm mb-xs">Skills</h5>

												<ul class="list list-inline list-icons">
													<li><i class="fa fa-check-circle"></i> Design</li>
													<li><i class="fa fa-check-circle"></i> HTML/CSS</li>
													<li><i class="fa fa-check-circle"></i> Javascript</li>
													<li><i class="fa fa-check-circle"></i> Backend</li>
												</ul>
											</li>
											<li>
												<h5 class="mt-sm mb-xs">Client</h5>
												<p>Okler Themes</p>
											</li>
										</ul>

									</div>
								</div>
							</div>
							<!-- Popup Project 5 - End -->
						</div>
						<div class="portfolio-item">
							<a href="#popupProject5" data-portfolio-on-modal>
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project.jpg" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Three Bottles</span>
											<span class="thumb-info-type">Logo</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-plus-square"></i></span>
										</span>
									</span>
								</span>
							</a>
							<!-- Popup Project 5 - Start -->
							<div id="popupProject5" class="popup-inline-content">
								<div class="row">
									<div class="col-md-12">
										<div class="portfolio-title">
											<div class="row">
												<div class="portfolio-nav-all col-md-1">
													<a href="#" data-portfolio-close><i class="fa fa-th"></i></a>
												</div>
												<div class="col-md-10 center">
													<h2 class="mb-none">Three Bottles</h2>
												</div>
												<div class="portfolio-nav col-md-1">
													<a href="#" data-portfolio-prev class="portfolio-nav-prev"><i class="fa fa-chevron-left"></i></a>
													<a href="#" data-portfolio-next class="portfolio-nav-next"><i class="fa fa-chevron-right"></i></a>
												</div>
											</div>
										</div>

										<hr class="tall">
									</div>
								</div>

								<div class="row mb-xl">
									<div class="col-md-4">

										<span class="img-thumbnail">
											<img alt="" class="img-responsive" src="img/projects/project.jpg">
										</span>

									</div>

									<div class="col-md-8">

										<div class="portfolio-info">
											<div class="row">
												<div class="col-md-12 center">
													<ul>
														<li>
															<a href="#" data-tooltip data-original-title="Like"><i class="fa fa-heart"></i>14</a>
														</li>
														<li>
															<i class="fa fa-calendar"></i> 01 January 2017
														</li>
														<li>
															<i class="fa fa-tags"></i> <a href="#">Brand</a>, <a href="#">Design</a>
														</li>
													</ul>
												</div>
											</div>
										</div>

										<h5 class="mt-sm">Project Description</h5>
										<p class="mt-xlg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Suspendisse potenti. Proin quis eros odio, dapibus dictum mauris. Donec nisi libero, adipiscing id pretium eget, consectetur sit amet leo. Nam at eros quis mi egestas fringilla non nec purus.</p>

										<a href="#" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Live Preview</a>

										<ul class="portfolio-details">
											<li>
												<h5 class="mt-sm mb-xs">Skills</h5>

												<ul class="list list-inline list-icons">
													<li><i class="fa fa-check-circle"></i> Design</li>
													<li><i class="fa fa-check-circle"></i> HTML/CSS</li>
													<li><i class="fa fa-check-circle"></i> Javascript</li>
													<li><i class="fa fa-check-circle"></i> Backend</li>
												</ul>
											</li>
											<li>
												<h5 class="mt-sm mb-xs">Client</h5>
												<p>Okler Themes</p>
											</li>
										</ul>

									</div>
								</div>
							</div>
							<!-- Popup Project 5 - End -->
						</div>
					</div>

					<hr class="tall">

				</div>
			</div>
		</div>
@stop