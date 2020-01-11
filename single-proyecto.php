<?php get_header(); ?>

<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
	<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

		<!-- begin:: Content -->
		<div class="kt-container  kt-grid__item kt-grid__item--fluid">

			<!--begin:: Portlet-->
			<div class="kt-portlet ">
				<div class="kt-portlet__body">
					<div class="kt-widget kt-widget--user-profile-3">
						<div class="kt-widget__top">
							
							<div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
								JM
							</div>
							<div class="kt-widget__content mb-4">
								<div class="kt-widget__head">
									<!-- <a href="#" class="kt-widget__username kt-hidden">
										Jason Muller
										<i class="flaticon2-correct"></i>
									</a> -->
									<div class="kt-widget__info kt-margin-t-5">
										<span class="logo-empresa">
											<?php the_post_thumbnail(); ?>
										</span>	
										<a href="<?php the_permalink(); ?>" class="kt-widget__title">
											<?php the_title(); ?>
										</a>
										
									</div>
									<div class="kt-widget__action">
										<!-- <button type="button" class="btn btn-sm btn-upper" style="background: #edeff6">edit</button>&nbsp; -->
										<a href="<?php the_field('dominio') ?>" type="button" class="btn btn-success btn-sm btn-upper text-light px-4" target="_blank" >Ir al sitio web</a>&nbsp;
										<?php 
											$page = get_page_by_title('proyectos');
										?>
										<a href="<?php esc_attr(the_permalink($page->ID)) ?> " type="button" class="btn btn-brand btn-sm btn-upper px-4">Volver a proyectos</a>
									</div>
								</div>
								<!-- <div class="kt-widget__subhead kt-hidden">
									<a href="#"><i class="flaticon2-new-email"></i>jason@siastudio.com</a>
									<a href="#"><i class="flaticon2-calendar-3"></i>PR Manager </a>
									<a href="#"><i class="flaticon2-placeholder"></i>Melbourne</a>
								</div> -->
								<div class="kt-widget__info mt-4">
									<div class="kt-widget__desc">
										<?php the_field('descripcion_del_proyecto'); ?>
									</div>
									<div class="kt-widget__progress kt-hidden">
										<div class="kt-widget__text">
											Progress
										</div>
										<div class="progress" style="height: 5px;width: 100%;">
											<div class="progress-bar kt-bg-success" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="kt-widget__stats">
											78%
										</div>
									</div>
									<div class="kt-widget__stats d-flex align-items-center flex-fill">
										<div class="kt-widget__item">
											<span class="kt-widget__date">
												Fecha de inicio
											</span>
											<?php
											 if($field = get_field('fecha_de_ingreso')): ?>
												<div class="kt-widget__label">
													<span class="btn btn-label-brand btn-sm btn-bold btn-upper"><?php echo $field ?></span>
												</div>
											<?php endif; ?>
										</div>
										<div class="kt-widget__item">
											<span class="kt-widget__date">
												Fecha de entrega (Aprox)
											</span>
											<?php
											 if($field = get_field('fecha_de_entrega_aprox')): ?>
												<div class="kt-widget__label">
													<span class="btn btn-label-danger btn-sm btn-bold btn-upper"><?php echo $field ?></span>
												</div>
											<?php endif; ?>
										</div>
										<div class="kt-widget__item flex-fill">
											<span class="kt-widget__subtitel">Progreso</span>
											<div class="kt-widget__progress d-flex  align-items-center">
												<div class="progress" style="height: 5px;width: 100%;">
													<div class="progress-bar kt-bg-success" role="progressbar" style="width: 78%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span class="kt-widget__stat">
													78%
												</span>
											</div>
										</div>
										<div class="kt-widget__desc mt-3">
											<div class="kt-widget__title">
												<b>Observaciones</b>
											</div>
											<?php 
												$general = get_field('informacion_general');
												echo $general['observaciones'] . '<br>';

											?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<!-- *********************************************************************** -->
						<div class="row m-4">
							<div class="col-xl-4">

								<!--begin:: Widgets/Order Statistics-->
								<div class="kt-portlet kt-portlet--height-fluid">
									<div class="kt-portlet__head">

										<div class="kt-portlet__head-label icono-app">
											<i class="fas fa-info-circle"></i>
											<h3 class="kt-portlet__head-title ml-2">
												Información general
											</h3>
										</div>
										<div class="kt-portlet__head-toolbar">
											<!-- <a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
												Export
											</a> -->
											<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">

												<!--begin::Nav-->
												<ul class="kt-nav">
													<li class="kt-nav__head">
														Export Options
														<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																	<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																	<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																</g>
															</svg> </span>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-drop"></i>
															<span class="kt-nav__link-text">Activity</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
															<span class="kt-nav__link-text">FAQ</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
															<span class="kt-nav__link-text">Settings</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-new-email"></i>
															<span class="kt-nav__link-text">Support</span>
															<span class="kt-nav__link-badge">
																<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
															</span>
														</a>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__foot">
														<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
														<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
													</li>
												</ul>

												<!--end::Nav-->
											</div>
										</div>
									</div>
									<div class="kt-portlet__body kt-portlet__body--fluid">
										<div class="kt-widget12">
											<div class="kt-widget12__content">
												<div class="kt-widget12__item">
													<div class="kt-widget12__info">
														<span class="kt-widget12__desc">Representante</span>
														<div class="kt-widget__item">
															<?php 
					 											if($representante = get_field('representante')): ?>
																	<?php
																	 ?>
																	 <span class="kt-widget12__value">
																		<a href="<?php echo $representante->guid ?> " target="_blank">
																			<?php echo $representante->post_title; ?>
																		</a>
																	</span>
																<?php else: ?>
																	<span>No registra</span>
																<?php endif; ?>
														</div>
													</div>
													<div class="kt-widget12__info">
														<span class="kt-widget12__desc">Tema o demo usado</span>
														<?php
														 
														 if($general['demo_usado']): ?>
															<div class="kt-widget__label">
																<span class="kt-widget12__value">
																	<a href="<?php echo $general['link_al_demo'] ?> " target="_blank">
																		<?php echo $general['demo_usado'] ?>
																	</a>	
																</span>
															</div>
														<?php endif; ?>
													</div>
												</div>
												<div class="kt-widget12__item row">
													<div class="kt-widget12__info col-4">
														<?php if($file = get_field('accesos')): ?>
															<span class="kt-widget12__desc">Accesos</span>
															<span class="kt-widget__value"><a href="<?php the_field('accesos'); ?>" target="_blank" >Descargar</a></span>
														<?php endif; ?>
													</div>
													<div class="kt-widget12__info col-4">
														<?php if($general['archivos_relacionados']): ?>
															<span class="kt-widget12__desc">Backup</span>
															<span class="kt-widget__value"><a href="<?php echo $general['link_al_backup'] ?>" target="_blank">Ir al backup</a></span>
														<?php endif; ?>
													</div>
													<div class="kt-widget12__info col-4">
														<?php if($general['link_al_backup']): ?>
															<span class="kt-widget12__desc">Adicionales</span>
															<span class="kt-widget__value"><a href="<?php echo $general['archivos_relacionados'] ?>" target="_blank">Descargar</a></span>
														<?php endif; ?>
													</div>
													
												</div>
											</div>
											
										</div>
									</div>
								</div>

								<!--end:: Widgets/Order Statistics-->
							</div>
							<div class="col-xl-4">

								<!--begin:: Widgets/Order Statistics-->
								<div class="kt-portlet kt-portlet--height-fluid">
									<div class="kt-portlet__head">

										<div class="kt-portlet__head-label icono-app">
											<i class="fas fa-globe"></i>
											<h3 class="kt-portlet__head-title ml-2">
												Información del dominio
											</h3>
										</div>
										<div class="kt-portlet__head-toolbar">
											<!-- <a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
												Export
											</a> -->
											<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">

												<!--begin::Nav-->
												<ul class="kt-nav">
													<li class="kt-nav__head">
														Export Options
														<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																	<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																	<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																</g>
															</svg> </span>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-drop"></i>
															<span class="kt-nav__link-text">Activity</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
															<span class="kt-nav__link-text">FAQ</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
															<span class="kt-nav__link-text">Settings</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-new-email"></i>
															<span class="kt-nav__link-text">Support</span>
															<span class="kt-nav__link-badge">
																<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
															</span>
														</a>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__foot">
														<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
														<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
													</li>
												</ul>

												<!--end::Nav-->
											</div>
										</div>
									</div>
									<div class="kt-portlet__body kt-portlet__body--fluid">
										<div class="kt-widget12">
											<div class="kt-widget12__content">
												<div class="kt-widget12__item">
													<div class="kt-widget12__info">
														<span class="kt-widget12__desc">Fecha de registro</span>
														<div class="kt-widget__item">
															<?php
															 $dominio = get_field('informacion_sobre_el_dominio');
															
															 if($fecha1 = $dominio['fecha_de_registro_dominio']): ?>
																<div class="kt-widget__label">
																	<span class="btn btn-label-brand btn-sm btn-bold btn-upper"><?php echo $fecha1 ?></span>
																</div>
															<?php endif; ?>
														</div>
													</div>
													<div class="kt-widget12__info">
														<span class="kt-widget12__desc">Fecha de vencimiento</span>
														<?php
														 if($fecha2 = $dominio['fecha_de_vencimiento_dominio']): ?>
															<div class="kt-widget__label">
																<span class="btn btn-label-danger btn-sm btn-bold btn-upper"><?php echo $fecha2 ?></span>
															</div>
														<?php endif; ?>
													</div>
												</div>
												<div class="kt-widget12__item">
													<div class="kt-widget12__info">
														<span class="kt-widget12__desc">Registrado en:</span>
														<?php
															if($dominio ['empresa_registradora_del_dominio']): ?>
																<span class="kt-widget12__value">
																
																	<a href="<?php echo $dominio['link_a_empresa_del_dominio'] ?> " target="_blank">
																	<?php echo $dominio['empresa_registradora_del_dominio']; ?>
																</span>
																</a>
														<?php endif; ?>
													</div>
													<div class="kt-widget12__info">
																<?php
  																   $parcial = acl_resta_fechas($fecha1);
  																   $result = 100 - (floor(($parcial * 100) / 365));
  																    if($result < 91)
  																    {
  																      $color = "brand";
  																    }elseif($result > 91.9 && $result < 96){
  																      $color = "warning";
  																    }
  																    elseif ($result >= 96) {
  																      $color = "danger";
  																    }
																?>
														<span class="kt-widget12__desc">Tiempo restante:</span>
														<div class="kt-widget12__progress">
															<div class="progress kt-progress--sm">
																<?php 
																	$result = acl_resta_fechas($fecha1); 
																	$result != 1 ?  $dia = " Diás" : $dia = " Dia"; 
																?>
																<div class="progress-bar kt-bg-<?php echo $color;  ?>" role="progressbar" style="width: <?php echo $result ?>%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><?php echo $result > 100 ? "VENCIDO" : $result . $dia; ?></div>
															</div>
																
															<span class="kt-widget12__stat">
																
															</span>
														</div>
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>

								<!--end:: Widgets/Order Statistics-->
							</div>
							<div class="col-xl-4">

								<!--begin:: Widgets/Order Statistics-->
								<div class="kt-portlet kt-portlet--height-fluid">
									<div class="kt-portlet__head">

										<div class="kt-portlet__head-label icono-app">
											<i class="fas fa-server"></i>
											<h3 class="kt-portlet__head-title ml-2">
												Información del servidor
											</h3>
										</div>
										<div class="kt-portlet__head-toolbar">
											<!-- <a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
												Export
											</a> -->
											<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">

												<!--begin::Nav-->
												<ul class="kt-nav">
													<li class="kt-nav__head">
														Export Options
														<span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																	<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																	<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																</g>
															</svg> </span>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-drop"></i>
															<span class="kt-nav__link-text">Activity</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
															<span class="kt-nav__link-text">FAQ</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
															<span class="kt-nav__link-text">Settings</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-new-email"></i>
															<span class="kt-nav__link-text">Support</span>
															<span class="kt-nav__link-badge">
																<span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
															</span>
														</a>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__foot">
														<a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
														<a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
													</li>
												</ul>

												<!--end::Nav-->
											</div>
										</div>
									</div>
									<div class="kt-portlet__body kt-portlet__body--fluid">
										<div class="kt-widget12">
											<div class="kt-widget12__content">
												<div class="kt-widget12__item">
													<div class="kt-widget12__info">
														<span class="kt-widget12__desc">Fecha de registro</span>
														<div class="kt-widget__item">
															<?php
															 $servidor = get_field('informacion_sobre_el_servidor');
															 if($servidor['fecha_de_registro_servidor']): ?>
																<div class="kt-widget__label">
																	<span class="btn btn-label-brand btn-sm btn-bold btn-upper"><?php echo $servidor['fecha_de_registro_servidor'] ?></span>
																</div>
																<?php else: ?>
																	<span class="btn btn-label-brand btn-sm btn-bold btn-upper">No Registra</span>
															<?php endif; ?>
														</div>
													</div>
													<div class="kt-widget12__info">
														<span class="kt-widget12__desc">Fecha de vencimiento</span>
														<?php
														 if($servidor['fecha_de_vencimiento_servidor']): ?>
															<div class="kt-widget__label">
																<span class="btn btn-label-danger btn-sm btn-bold btn-upper"><?php echo $servidor['fecha_de_vencimiento_servidor'] ?></span>
															</div>
															<?php else: ?>
																<span class="btn btn-label-brand btn-sm btn-bold btn-upper">No Registra</span>
														<?php endif; ?>
													</div>
												</div>
												<div class="kt-widget12__item">
													<div class="kt-widget12__info">
														<span class="kt-widget12__desc">Registrado en:</span>
														<?php
															if($servidor['tipo_de_servidor']): ?>
																<span class="kt-widget12__value">
																	<?php if($servidor['tipo_de_servidor']=== 'Externo'): ?>
																	<a href="<?php echo $servidor['link_al_servidor'] ?> " target="_blank">
																	<?php echo $servidor['servidor_externo']; 
																	else: ?>
																	<a href="<?php echo $servidor['link_al_servidor'] ?> " target="_blank">
																	<?php echo $servidor['tipo_de_servidor']; ?>
																<?php endif; ?>
																	
																</span>
																</a>
														<?php endif; ?>
													</div>
													<?php if($servidor['tipo_de_servidor'] === 'Hostgator CLAB'): ?>
														<div class="kt-widget12__info">
															<span class="kt-widget12__desc">Plan asignado</span>
															<?php
																if($servidor['plan_asignado']): ?>
																	<span class="kt-widget12__value">
																	
																		<a href="<?php echo $servidor['link_al_servidor'] ?> " target="_blank">
																		<?php echo $servidor['plan_asignado']; ?>
																	</span>
																	</a>
															<?php endif; ?>
														</div>
													<?php endif; ?>
												</div>
											</div>
											
										</div>
									</div>
								</div>

								<!--end:: Widgets/Order Statistics-->
							</div>

							

						</div>
					</div>
				</div>
			</div>

			<!--end:: Portlet-->
			
		</div>

		<!-- end:: Content -->
	</div>
</div>










<?php get_footer(); ?>