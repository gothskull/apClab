<?php get_header('login'); ?>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">

		<!-- begin::Page loader -->

		<!-- end::Page Loader -->

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root kt-page">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
					<div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
						<div class="kt-login__wrapper">
							<div class="kt-login__container">
								<div class="kt-login__body">
									<div class="kt-login__logo">
											<img src="./images/clab-logo-color.png">
										<a href="#">
										</a>
									</div>
									<div class="kt-login__signin">
										<div class="kt-login__head">
											<h3 class="kt-login__title">Sign In To Admin</h3>
										</div>
										<div class="kt-login__form">
											<form class="kt-form" action="">
												<div class="form-group">
													<input class="form-control" type="text" placeholder="Usuario" name="email" autocomplete="off">
												</div>
												<div class="form-group">
													<input class="form-control form-control-last" type="password" placeholder="Contraseña" name="password">
												</div>
												<div class="kt-login__extra">
													<label class="kt-checkbox">
														<input type="checkbox" name="remember"> Recuerdame
														<span></span>
													</label>
													<a href="javascript:;" id="kt_login_forgot">Olvide mi contraseña </a>
												</div>
												<div class="kt-login__actions">
													<button id="kt_login_signin_submit" class="btn btn-brand btn-pill btn-elevate">Ingresar</button>
												</div>
											</form>
										</div>
									</div>
									<div class="kt-login__signup">
										<div class="kt-login__head">
											<h3 class="kt-login__title">Sign Up</h3>
											<div class="kt-login__desc">Enter your details to create your account:</div>
										</div>
										<div class="kt-login__form">
											<form class="kt-form" action="">
												<div class="form-group">
													<input class="form-control" type="text" placeholder="Fullname" name="fullname">
												</div>
												<div class="form-group">
													<input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
												</div>
												<div class="form-group">
													<input class="form-control" type="password" placeholder="Password" name="password">
												</div>
												<div class="form-group">
													<input class="form-control form-control-last" type="password" placeholder="Confirm Password" name="rpassword">
												</div>
												<div class="kt-login__extra">
													<label class="kt-checkbox">
														<input type="checkbox" name="agree"> I Agree the <a href="#">terms and conditions</a>.
														<span></span>
													</label>
												</div>
												<div class="kt-login__actions">
													<button id="kt_login_signup_submit" class="btn btn-brand btn-pill btn-elevate">Sign Up</button>
													<button id="kt_login_signup_cancel" class="btn btn-outline-brand btn-pill">Cancel</button>
												</div>
											</form>
										</div>
									</div>
									<div class="kt-login__forgot">
										<div class="kt-login__head">
											<h3 class="kt-login__title">Olvide mi contraseña ?</h3>
											<div class="kt-login__desc">Ingresa mtu correo para restablecer l contraseña:</div>
										</div>
										<div class="kt-login__form">
											<form class="kt-form" action="">
												<div class="form-group">
													<input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
												</div>
												<div class="kt-login__actions">
													<button id="kt_login_forgot_submit" class="btn btn-brand btn-pill btn-elevate">Request</button>
													<button id="kt_login_forgot_cancel" class="btn btn-outline-brand btn-pill">Cancel</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/media/bg/bg-4.jpg);">
						<div class="kt-login__section">
							<div class="kt-login__block">
								<h3 class="kt-login__title">Join Our Community</h3>
								<div class="kt-login__desc">
									Lorem ipsum dolor sit amet, coectetuer adipiscing
									<br>elit sed diam nonummy et nibh euismod
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#374afb",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="<php echo get_template_directory_uri() ?> /assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
		<script src="<php echo get_template_directory_uri() ?> /assets/js/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="<php echo get_template_directory_uri() ?> /assets/js/pages/custom/login/login-general.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>