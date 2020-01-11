<?php 
/**
* FILTRA DOMINIOS VENCIDOS 
*/
function acl_filtra_estado_dominios()
{
  $dominio = get_field('informacion_sobre_el_dominio');
  $dominio['dominio'];

   $args = [
    'post_type'      => 'proyecto',
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'meta_key'       => 'informacion_sobre_el_dominio_dominio',
    'orderby'        => 'meta_value',
    'meta_query'     => [
      [
        'key'     => 'informacion_sobre_el_dominio_dominio',
        'value'   => time(),
        'compare' => '<=',
        'type'    => 'NUMERIC',
      ]
    ]
   ];

   $dominios = new WP_Query($args);
   if($dominios->have_posts()):
    while($dominios->have_posts()): $dominios->the_post();
      // the_title();
     $fecha = get_post_meta(get_the_ID(),'informacion_sobre_el_dominio_fecha_de_registro_dominio',true);
     $fecha_r = new DateTime($fecha);
     $fecha1 =  $fecha_r->format("d-m-Y");
     $result = acl_resta_fechas($fecha1);
     $result != 1 ?  $dia = " Diás" : $dia = " Dia"; 
     if($result <= 30)
     {
       $datos = [
        'dominio'=>  get_the_title(),
        'dias-r'=>  $result . $dia
       ];  

     }else{
        $datos = "No hay dominios cerca de vencimiento";
     }
    endwhile;wp_reset_postdata();
   endif;
    return $datos;
}
 

/**
* RESTA LAS FECHAS 
*/
 function acl_resta_fechas($fecha1)
 {
   $fecha_ini  = strtotime(date($fecha1));
   $hoy        = strtotime(date('d-m-Y'));
   $diferencia = ($hoy - $fecha_ini)/60/60/24;
   $result     = 365 - $diferencia;

 

   return $result;
 }

/**
* LIMITA EL TAMAÑO DEL EXCERPT
*/
function acl_excerpt_content($limit,$contenido) 
{
  $content = explode(' ', $contenido, $limit);
  if (count($content)>=$limit) {
  array_pop($content);
  $content = implode(" ",$content).'...';
  } else {
  $content = implode(" ",$content);
  }
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]>', $content);
  return $content;
}

/**
* TAMAÑOS DE IMAGENES 
*/
add_image_size( "miniatura_logo", 512, 512, true );



add_filter("show_admin_bar","__return_false");

function acl_add_classes_link_menu( $atts, $item, $args ) 
{
    // check if the item is in the primary menu
    if( $args->theme_location == 'menu-1' ) {
      // add the desired attributes:
      $atts['class'] = 'kt-menu__link kt-menu__toggle';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'acl_add_classes_link_menu', 10, 3 );