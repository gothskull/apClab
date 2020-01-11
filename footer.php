<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package App_Creative
 */
						get_template_part('template-parts/content','quick-panel');
?>
						<div id="kt_scrolltop" class="kt-scrolltop">
							<i class="fa fa-arrow-up"></i>
						</div>
					</div>
				</div>
			</div>

			
		</div>
	</div>
</div>
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
	<div class="kt-footer  kt-footer--extended  kt-grid__item" id="kt_footer">
		<?php //get_template_part('template-parts/content','footer-top'); ?>
		<div class="kt-footer__bottom">
			<div class="kt-container  kt-container--fluid ">
				<div class="kt-footer__wrapper">
					<div class="kt-footer__logo">
						
						<div class="kt-footer__copyright kt-footer__menu">
							<?php echo date('Y') ?> &nbsp;&copy;&nbsp;
							Diseño y Desarollo
							<a class="" href="http://bogotawebcompany.com/" target="_blank"> Hernando J. Chaves</a>
						</div>
					</div>
					<div class="kt-footer__menu">
						<a href="<?php esc_attr(home_url('/')); ?> " >Escritorio</a>
						<a href="http://keenthemes.com/metronic" >Documentación</a>
						<a href="http://keenthemes.com/metronic" >Contacto</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	</div><!-- #content -->

	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
