<?php 

function acl_query_proyectos()
{
	$args = [
		'post_type'  => 'proyecto',
		'posts_per_page'  => -1,
		'orderby'        => 'date',
		'order'          => 'DESC',
	];

	$proyectos = new WP_Query($args);

	if($proyectos->have_posts()): ?>
	
		<div class="row">
			<?php while($proyectos->have_posts()) : $proyectos->the_post() ?>

				<div class="col-xl-6">
					<div class="kt-portlet kt-portlet--height-fluid">
						<div class="kt-portlet__body kt-portlet__body--fit">
					
							<!--begin::Widget -->
							<div class="kt-widget kt-widget--project-1">
								<div class="kt-widget__head">
									<div class="kt-widget__label">
										<div class="kt-widget__media">
											<span class="logo-empresa">
												<?php the_post_thumbnail(); ?>
											</span>	
										</div>
										<div class="kt-widget__info kt-margin-t-5">
											<a href="<?php the_permalink(); ?>" class="kt-widget__title">
												<?php the_title(); ?>
											</a>
											<span class="kt-widget__desc">
												<?php echo get_the_term_list("$post->ID",'category','',' / ',''); ?>
											</span>
										</div>
									</div>
									<div class="kt-portlet__head-toolbar">
										<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
											<i class="flaticon-more-1"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
											<ul class="kt-nav">
												<li class="kt-nav__item">
													<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-line-chart"></i>
														<span class="kt-nav__link-text">Reports</span>
													</a>
												</li>
												<li class="kt-nav__item">
													<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-send"></i>
														<span class="kt-nav__link-text">Messages</span>
													</a>
												</li>
												<li class="kt-nav__item">
													<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
														<span class="kt-nav__link-text">Charts</span>
													</a>
												</li>
												<li class="kt-nav__item">
													<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-avatar"></i>
														<span class="kt-nav__link-text">Members</span>
													</a>
												</li>
												<li class="kt-nav__item">
													<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-settings"></i>
														<span class="kt-nav__link-text">Settings</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="kt-widget__body">
									<div class="kt-widget__stats">
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
										<!-- <div class="kt-widget__item flex-fill">
											<span class="kt-widget__subtitel">Progreso</span>
											<div class="kt-widget__progress d-flex  align-items-center">
												<div class="progress" style="height: 5px;width: 100%;">
													<div class="progress-bar kt-bg-success" role="progressbar" style="width: 92%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span class="kt-widget__stat">
													92%
												</span>
											</div>
										</div> -->
									</div>
									<span class="kt-widget__text">
										<?php 
											if($descripcion = get_field('descripcion_del_proyecto')):
												echo acl_excerpt_content(25,$descripcion);
											endif;
										?>
									</span>
									<div class="kt-widget__content">
										<div class="kt-widget__details">
											<span class="kt-widget__subtitle">Representante</span>
											<span class="kt-widget__value">
												<?php 
													if($representante = get_field('representante')): ?>
														<a href="<?php echo $representante->guid ?> " target="_blank">
															<?php echo $representante->post_title; ?>
														</a>
													<?php endif; ?>
													
											</span>
										</div>
										<div class="kt-widget__details">
											<span class="kt-widget__subtitle">Servidor</span>
												<?php 
													if($servidor = get_field('informacion_sobre_el_servidor')): ?>
														<span class="kt-widget__value">
														
															<a href="<?php echo $servidor['link_al_servidor'] ?> " target="_blank">
															<?php echo $servidor['tipo_de_servidor']; ?>
														</span>
														</a>
													<?php endif; ?>
										</div>
										<div class="kt-widget__details">
											<span class="kt-widget__subtitle">Accesos</span>
											<?php if($file = get_field('accesos')): ?>
												<span class="kt-widget__value"><a href="<?php the_field('accesos'); ?>" target="_blank" >Descargar</a></span>
											<?php endif; ?>
										</div>
										<!-- <div class="kt-widget__details">
											<span class="kt-widget__subtitle">Members</span>
											<div class="kt-media-group">
												<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
													<img src="<?php echo get_template_directory_uri() ?> /assets/media/users/100_7.jpg" alt="image">
												</a>
												<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Alison Brandy">
													<img src="<?php echo get_template_directory_uri() ?> /assets/media/users/100_3.jpg" alt="image">
												</a>
												<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Selina Cranson">
													<img src="<?php echo get_template_directory_uri() ?> /assets/media/users/100_2.jpg" alt="image">
												</a>
												<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Luke Walls">
													<img src="<?php echo get_template_directory_uri() ?> /assets/media/users/100_13.jpg" alt="image">
												</a>
												<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
													<img src="<?php echo get_template_directory_uri() ?> /assets/media/users/100_4.jpg" alt="image">
												</a>
												<a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
													<span>+3</span>
												</a>
											</div>
										</div> -->
									</div>
								</div>
								<div class="kt-widget__footer">
									<div class="kt-widget__wrapper">
										<div class="kt-widget__section">
											<div class="kt-widget__blog">
												<i class="flaticon-globe"></i>
												<a href="<?php the_field('dominio') ?>" target="_blank" class="kt-widget__value kt-font-brand">Ir al sitio web</a>
											</div>
											<!-- <div class="kt-widget__blog">
												<i class="flaticon2-talk"></i>
												<a href="#" class="kt-widget__value kt-font-brand">745 Comments</a>
											</div> -->
										</div>
										<div class="kt-widget__section">
											<a href="<?php the_permalink(); ?>" type="button" class="btn btn-brand btn-sm btn-upper btn-bold">Detalles</a>
										</div>
									</div>
								</div>
							</div>
					
							<!--end::Widget -->
						</div>
					</div>
				</div>

			<?php endwhile;wp_reset_postdata() ?>
		</div>

	<?php
	endif;

}