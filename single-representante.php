<?php get_header(); ?>


<div class="kt-form kt-form--label-right mt-5">
	<div class="kt-form__body">
		<div class="kt-section kt-section--first">
			<div class="kt-section__body">
				<div class="row">
					<label class="col-xl-3"></label>
					<div class="col-lg-9 col-xl-6">
						<h1 class="kt-section__title kt-section__title-sm"><?php the_title(); ?></h1>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
					<div class="col-lg-9 col-xl-6">
						<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
							<div class="kt-avatar__holder">
								<?php the_post_thumbnail() ?>
							</div>
							<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
								<!-- <i class="fa fa-pen"></i> -->
								<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
							</label>
							<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
								<i class="fa fa-times"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Nombre</label>
					<div class="col-lg-9 col-xl-6">
						<input class="form-control" type="text" value="<?php the_field('nombre'); ?> ">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Apellidos</label>
					<div class="col-lg-9 col-xl-6">
						<input class="form-control" type="text" value="<?php the_field('apellidos'); ?> ">
					</div>
				</div>
					
				<?php 
					$telefono = get_field('telefono');
					if($telefono['numero_telefonico']): 
				?>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Teléfono de contacto</label>
					<div class="col-lg-9 col-xl-6">
						<div class="input-group">
							<div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
							<input type="text" class="form-control" value="<?php echo $telefono['numero_telefonico']; ?>" aria-describedby="basic-addon1">
						</div>
					</div>
				</div>
				<?php endif; 
				
					if($telefono['numero_telefonico_2']): 
				?>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Teléfono de contacto 2</label>
					<div class="col-lg-9 col-xl-6">
						<div class="input-group">
							<div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
							<input type="text" class="form-control" value="<?php echo $telefono['numero_telefonico_2']; ?>" aria-describedby="basic-addon1">
						</div>
					</div>
				</div>
				<?php endif; 

					if($telefono['numero_telefonico_3']): 
				?>
				<div class="form-group row">
					<label class="col-xl-3 col-lg-3 col-form-label">Teléfono de contacto 3</label>
					<div class="col-lg-9 col-xl-6">
						<div class="input-group">
							<div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
							<input type="text" class="form-control" value="<?php echo $telefono['numero_telefonico_3']; ?>" aria-describedby="basic-addon1">
						</div>
					</div>
				</div>
				<?php endif; 

					$correo = get_field('correo_electronico');
					if($correo['correo']): 
				?>
					<div class="form-group row">
						<label class="col-xl-3 col-lg-3 col-form-label">Correo Electronico</label>
						<div class="col-lg-9 col-xl-6">
							<div class="input-group">
								<div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
								<input type="text" class="form-control" value="<?php echo $correo['correo']; ?>" placeholder="Email" aria-describedby="basic-addon1">
							</div>
						</div>
					</div>
				 <?php endif;  

				 	if($correo['correo_2']): 
				 ?>
				 	<div class="form-group row">
				 		<label class="col-xl-3 col-lg-3 col-form-label">Correo Electronico 2</label>
				 		<div class="col-lg-9 col-xl-6">
				 			<div class="input-group">
				 				<div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
				 				<input type="text" class="form-control" value="<?php echo $correo['correo_2']; ?>" placeholder="Email" aria-describedby="basic-addon1">
				 			</div>
				 		</div>
				 	</div>
				  <?php endif; 

				  	if($correo['correo_3']): 
				  ?>
				  	<div class="form-group row">
				  		<label class="col-xl-3 col-lg-3 col-form-label">Correo Electronico 3</label>
				  		<div class="col-lg-9 col-xl-6">
				  			<div class="input-group">
				  				<div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
				  				<input type="text" class="form-control" value="<?php echo $correo['correo_3']; ?>" placeholder="Email" aria-describedby="basic-addon1">
				  			</div>
				  		</div>
				  	</div>
				   <?php endif; ?>
				
			</div>

		</div>
	</div>
	<div class="row mt-5">
		<div class="col-12 mt-5 d-flex justify-content-center">
			<div class="kt-widget__action">
				<!-- <button type="button" class="btn btn-sm btn-upper" style="background: #edeff6">edit</button>&nbsp; -->
				<a href="<?php the_field('dominio') ?>" type="button" class="btn btn-success btn-sm btn-upper text-light px-4" target="_blank" >Ir al sitio web</a>&nbsp;
				<?php 
					$page = get_page_by_title('proyectos');
				?>
				<a href="<?php esc_attr(the_permalink($page->ID)) ?> " type="button" class="btn btn-brand btn-sm btn-upper px-4">Volver a proyectos</a>
			</div>
		</div>
	</div>
</div>









<?php get_footer(); ?>