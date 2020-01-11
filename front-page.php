<?php get_header(); ?>

<div class="row">
	<div class="col-xl-4 col-lg-4">
		<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Dominio
					</h3>
				</div>
				<div class="kt-portlet__head-toolbar">
					<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#kt_widget4_tab2_content" role="tab">
								Estado
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="kt-portlet__body">
				<div class="tab-content">
					<div class="tab-pane active" id="kt_widget4_tab1_content">
						<div class="kt-widget4">
							<?php 
								$datos =	acl_filtra_estado_dominios(); 
								echo "<pre>";
									var_dump($datos);
								echo "</pre>";
								print_r($datos[1]);
								foreach($datos as $dato => $valor ):										
							?>
							<div class="kt-widget4__item">
								<div class="kt-widget4__pic kt-widget4__pic--pic">
									<img src="assets/media/users/100_4.jpg" alt="">
								</div>
								<div class="kt-widget4__info">
									<a href="#" class="kt-widget4__username">
										
									</a>
									<p class="kt-widget4__text">
										<?php echo $dato ?>
									</p>
								</div>
								<a href="#" class="btn btn-sm btn-label-brand btn-bold"><?php echo $valor?> </a>
							</div>
								
							<?php endforeach; ?>
						</div>
					</div>
					<div class="tab-pane" id="kt_widget4_tab2_content">
						<div class="kt-widget4">
							<div class="kt-widget4__item">
								<div class="kt-widget4__pic kt-widget4__pic--pic">
									<img src="assets/media/users/100_2.jpg" alt="">
								</div>
								<div class="kt-widget4__info">
									<a href="#" class="kt-widget4__username">
										Kristika Bold
									</a>
									<p class="kt-widget4__text">
										Product Designer,Apple Inc
									</p>
								</div>
								<a href="#" class="btn btn-sm btn-label-success">Follow</a>
							</div>
							<div class="kt-widget4__item">
								<div class="kt-widget4__pic kt-widget4__pic--pic">
									<img src="assets/media/users/100_13.jpg" alt="">
								</div>
								<div class="kt-widget4__info">
									<a href="#" class="kt-widget4__username">
										Ron Silk
									</a>
									<p class="kt-widget4__text">
										Release Manager, Loop Inc
									</p>
								</div>
								<a href="#" class="btn btn-sm btn-label-brand">Follow</a>
							</div>
							<div class="kt-widget4__item">
								<div class="kt-widget4__pic kt-widget4__pic--pic">
									<img src="assets/media/users/100_9.jpg" alt="">
								</div>
								<div class="kt-widget4__info">
									<a href="#" class="kt-widget4__username">
										Nick Bold
									</a>
									<p class="kt-widget4__text">
										Web Developer, Facebook Inc
									</p>
								</div>
								<a href="#" class="btn btn-sm btn-label-danger">Follow</a>
							</div>
							<div class="kt-widget4__item">
								<div class="kt-widget4__pic kt-widget4__pic--pic">
									<img src="assets/media/users/100_2.jpg" alt="">
								</div>
								<div class="kt-widget4__info">
									<a href="#" class="kt-widget4__username">
										Wiltor Delton
									</a>
									<p class="kt-widget4__text">
										Project Manager, Amazon Inc
									</p>
								</div>
								<a href="#" class="btn btn-sm btn-label-success">Follow</a>
							</div>
							<div class="kt-widget4__item">
								<div class="kt-widget4__pic kt-widget4__pic--pic">
									<img src="assets/media/users/100_8.jpg" alt="">
								</div>
								<div class="kt-widget4__info">
									<a href="#" class="kt-widget4__username">
										Nick Bold
									</a>
									<p class="kt-widget4__text">
										Web Developer, Facebook Inc
									</p>
								</div>
								<a href="#" class="btn btn-sm btn-label-info">Follow</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-lg-4">

		<!--begin:: Widgets/Profit Share-->
		<div class="kt-portlet kt-portlet--height-fluid">
			<div class="kt-widget14">
				<div class="kt-widget14__header">
					<h3 class="kt-widget14__title">
						Profit Share
					</h3>
					<span class="kt-widget14__desc">
						Profit Share between customers
					</span>
				</div>
				<div class="kt-widget14__content">
					<div class="kt-widget14__chart">
						<div class="kt-widget14__stat">45</div>
						<canvas id="kt_chart_profit_share" style="height: 140px; width: 140px;"></canvas>
					</div>
					<div class="kt-widget14__legends">
						<div class="kt-widget14__legend">
							<span class="kt-widget14__bullet kt-bg-success"></span>
							<span class="kt-widget14__stats">37% Sport Tickets</span>
						</div>
						<div class="kt-widget14__legend">
							<span class="kt-widget14__bullet kt-bg-warning"></span>
							<span class="kt-widget14__stats">47% Business Events</span>
						</div>
						<div class="kt-widget14__legend">
							<span class="kt-widget14__bullet kt-bg-brand"></span>
							<span class="kt-widget14__stats">19% Others</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--end:: Widgets/Profit Share-->
	</div>
	<div class="col-xl-4 col-lg-4">

		<!--begin:: Widgets/Revenue Change-->
		<div class="kt-portlet kt-portlet--height-fluid">
			<div class="kt-widget14">
				<div class="kt-widget14__header">
					<h3 class="kt-widget14__title">
						Revenue Change
					</h3>
					<span class="kt-widget14__desc">
						Revenue change breakdown by cities
					</span>
				</div>
				<div class="kt-widget14__content">
					<div class="kt-widget14__chart">
						<div id="kt_chart_revenue_change" style="height: 150px; width: 150px;"></div>
					</div>
					<div class="kt-widget14__legends">
						<div class="kt-widget14__legend">
							<span class="kt-widget14__bullet kt-bg-success"></span>
							<span class="kt-widget14__stats">+10% New York</span>
						</div>
						<div class="kt-widget14__legend">
							<span class="kt-widget14__bullet kt-bg-warning"></span>
							<span class="kt-widget14__stats">-7% London</span>
						</div>
						<div class="kt-widget14__legend">
							<span class="kt-widget14__bullet kt-bg-brand"></span>
							<span class="kt-widget14__stats">+20% California</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--end:: Widgets/Revenue Change-->
	</div>
</div>




<?php get_footer(); ?>