<?php
/**
 * PHP MVC template
 *
 * @package jpFramework
 * @author JP
 * @link http://www.???.com
 * @version 0.3a
 *
 * @copyright 2016
 *
 * Description
 */

class Application {

	protected $controller = 'user';
	protected $method = 'login';
	protected $params = [ ];
	public function __construct() {
		$url = $this->parseUrl ();

		// Verify that application/Controller exists before use
		if (file_exists ( '../application/controller/' . $url [0] . '.php' )) {
			$this->controller = $url [0];
			unset ( $url [0] );
		}

		// Load controller after $controller and $method have been set
		require_once '../application/controller/' . $this->controller . '.php';
		$this->controller = new $this->controller ();

		// set controller method (Ex: users/login)
		if (isset ( $url [1] )) {
			if (method_exists ( $this->controller, $url [1] )) {
				$this->method = $url [1];
				unset ( $url [1] );
			}
		}

		// If $url is TRUE (populated) then assign array values to $this->params
		$this->params = $url ? array_values ( $url ) : [ ];

		// set string
		call_user_func_array ( [ $this->controller, $this->method ], $this->params );

		// debug call a controller manually
		// $this->controller->index ();
	}
	private function parseUrl() {
		if (isset ( $_GET ['url'] )) {
			$url = explode ( '/', filter_var ( trim ( $_GET ['url'], '/' ), FILTER_SANITIZE_URL ) );
			// $_SESSION ['success'] .= "Your URL string (Array) is: " . serialize ($url ) . ". ";
			// $_SESSION ['success'] .= "Template: ";
			return $url;
		}
	}
}
