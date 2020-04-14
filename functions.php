<?php
add_action( 'admin_post_nopriv_process_form', 'send_mail_data' );
add_action( 'admin_post_process_form', 'send_mail_data' );

// Funcion callback
function send_mail_data() {

	$name = sanitize_text_field($_POST['name']);
  $email = sanitize_email($_POST['email']);
	$subject = sanitize_text_field($_POST['subject']);
	$message = sanitize_textarea_field($_POST['message']);

	$adminmail = "raul93611@gmail.com"; //email destino
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
?>
