<?php
/* Manage session states  */

 if ( !isset ( $_SESSION ['profileUid']) or empty( $_SESSION ['profileUid']) ) {
	// $redirect = $data['redirect'];
	$_SESSION['info'] .= "Your session has expired and you have been logged out. ";
	// $redirect-> loginLoad ( 'user/logout/' );
}

?>