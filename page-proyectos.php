<?php 
	get_header(); 
	$page  = get_page_by_title('Proyectos');
?>

<div class="kt-container  kt-grid__item kt-grid__item--fluid">
	<?php acl_query_proyectos() ?>
</div>

<?php get_footer(); ?>