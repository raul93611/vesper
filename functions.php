<?php
add_action( 'admin_post_nopriv_process_form', 'send_mail_data' );
add_action( 'admin_post_process_form', 'send_mail_data' );

// Funcion callback
function send_mail_data() {

	$name = sanitize_text_field($_POST['name']);
  $email = sanitize_email($_POST['email']);
	$subject = sanitize_text_field($_POST['subject']);
	$message = sanitize_textarea_field($_POST['message']);

	$adminmail = "administracion@pracmatik.com"; //email destino
	$headers = "Reply-to: " . $name . " <" . $email . ">";

	//Cuerpo del mensaje
	$msg = "Nombre: " . $name . "\n";
	$msg .= "E-mail: " . $email . "\n\n";
	$msg .= "Mensaje: \n\n" . $message . "\n";

  echo $adminmail;
  echo $subject;
  echo $msg;
  echo $headers;

	$sendmail = wp_mail( $adminmail, $subject, $msg, $headers);

	wp_redirect( home_url("/") ); //asumiendo que existe esta url
}

//crear menu
if(function_exists('register_nav_menus')){
	register_nav_menus(array('superior' => 'Menu Superior'));
	register_nav_menus(array('inferior' => 'Menu Inferior'));
}

//agregar clases al primer y ultimo elemento del menu
function add_first_and_last($items) {
  $items[1]->classes[] = 'active';
  $items[count($items)]->classes[] = 'get-started';
  return $items;
}

add_filter('wp_nav_menu_objects', 'add_first_and_last');

//agregar clase scrollto para el menu Inferior
add_filter('nav_menu_link_attributes', 'clase_a', 10, 3);

function clase_a($atts, $item, $args){
	$class = 'scrollto';
	$atts['class'] = $class;
	return $atts;
}

// agregar custom LOGO
add_theme_support( 'custom-logo' );
// agregar imagen a cada productos
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}
?>
