<?php

require_once 'Database.php';

/**
 * PHP MVC template
 *
 * @package jpFramework
 * @author John Perry
 * @link http://www.???.com
 * @version 1.0
 *
 * @copyright 2016 Manage IT MD
 *
 * Description
 */
class AppFunctions {

	/////////////////////////////////////////////////////////////////////		 SESSIONS

	/*
	 * Usage: $notify = $data ['notify'];
	 * Usage: $notify->showNotification('info','444444444444');
	 */
	public function showNotification ($type = 'info', $message) {
		switch ( $type ) {
			case 'errors': return $_SESSION ['errors'] .= $message; break;
			case 'warning': return$_SESSION ['warning'] .= $message; break;
			case 'success': return $_SESSION ['success'] .= $message; break;
			case 'info': return $_SESSION ['info'] .= $message; break;
		}
	}


	////////////////////////////////////////////////////////////////////		 URL FUNCTIONS

	/* Redirect page to ... */
	public function redirectTo($location = '../user/login') {
		if ($location != NULL) {
			header ( "Location: {$location}" );
			exit ();
		}
	}

	/* Verify that a URL variable is set and not empty */
	public function verifyUrlVariableStart() {
		if (! isset ( $_GET ['start'] ) or empty ( $_GET ['start'] ))
		{
			$this->redirectTo();
		}
	}

	/* Load login page or specificed URL */
	function loginLoad($page = '../user/login') {
		$url = 'https://' . $_SERVER ['HTTP_HOST'] . dirname ( $_SERVER ['PHP_SELF'] );
		$url = rtrim ( $url, '/\\' );
		$url .= '/' . $page;
		header ( "Location: $url" );
		exit ();
	}

	/* Get the current web page */
	public function getPageUri() {
		return basename($_SERVER['REQUEST_URI']);
	}



	

	// End Class
}