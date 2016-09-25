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
class User extends Controller {

	public function login($var1=NULL, $var2=NULL) { // Set view

		$userModel = $this->model ( 'Users' );
		$userSession = $this->model ('AppFunctions');

		$this->view ( 'processors/login',
			[
				'mysqli' => $mysqli,
				'logIn' => $userModel,
				'redirect' => $userSession,
			]
		);
		$this->view ( 'templates/header',
         	[
			 'pageTitle' => 'Log In',
			]
		);
		$this->view ( 'templates/css' );
		$this->view ( 'templates/header_scripts' );
		$this->view ( 'templates/body',
			 [ 'pageBodyId' => 'signup', ]);
		$this->view ( 'templates/menu_fixed' );

		$this->view ( 'templates/notifications',
			[
				'alert' => $userSession->showNotification("info","Login"),
			]
		);
		$this->view ( 'home/login',
			[

			]
		);
		$this->view ( 'templates/footer_scripts' );
		$this->view ( 'templates/footer' ); $this->view ( 'templates/finalize' );
		unset($this->view);
	}

	public function register ($var1=NULL, $var2=NULL) { // Set view


		$userModel = $this->model ( 'Users' );
		// $emailTemplate = $this->model ( 'EmailTemplates' );
		$userSession = $this->model ('AppFunctions');

		$this->view ( 'templates/session' );
		$this->view ( 'templates/header',
         	[
			 'pageTitle' => 'Registration',
			]
		);
		$this->view ( 'templates/css' );
		$this->view ( 'templates/header_scripts' );
		$this->view ( 'templates/body',
			 [ 'pageBodyId' => 'signup', ]);
		$this->view ( 'templates/menu_fixed' );
		$this->view ( 'processors/register',[]);
		$this->view ( 'templates/notifications',
			[
				'alert' => $userSession->showNotification("info","Register"),
			]
		);
		$this->view ( 'home/register',[]);
		$this->view ( 'templates/footer_scripts' );
		$this->view ( 'templates/footer' );
		$this->view ( 'templates/finalize' );

		// debug var_dump($user);
	}

	public function verify ($var1=NULL, $var2=NULL) { // Set view

		$userModel = $this->model ( 'Users' );
		$userSession = $this->model ('AppFunctions');

		$this->view ( 'templates/header',
            [
				'pageTitle' => 'Account Verification',
			]
		);
		$this->view ( 'templates/css' );
		$this->view ( 'templates/header_scripts' );
		$this->view ( 'templates/body',
			 [ 'pageBodyId' => 'status', ]);
		$this->view ( 'templates/menu_fixed' );
		$this->view ( 'templates/notifications',
			[
				'alert' => $userSession->showNotification("info","The Controller is passing the followin variables: ($var1, $var2)"),
			]
		);
		$this->view ( 'home/verify',
			[
				'verificationCode' => $var1,
			]
		);
		$this->view ( 'templates/footer_scripts' );
		$this->view ( 'templates/footer' );
		$this->view ( 'widgets/app_iconcolorrotator/widget' );
		$this->view ( 'templates/finalize' );

		// debug var_dump($user);
	}

	public function profile ($var1=NULL, $var2=NULL) { // Set view
		// Establish your Model requirements (from file)
		$userModel = $this->model ( 'Users' );
		$userSession = $this->model ('AppFunctions');

		$this->view ( 'templates/session');
		$this->view ( 'processors/profile');
		$this->view ( 'templates/header',
   				 [ 'pageTitle' => 'Accont Profile', ]);
		$this->view ( 'templates/css' );
		$this->view ( 'templates/header_scripts' );
		$this->view ( 'templates/body',
			  [ 'pageBodyId' => 'home', ]);
		$this->view ( 'templates/menu_fixed' );
		$this->view ( 'templates/notifications',
			[
				'alert' => $userSession->showNotification("info","Profile"),
			]
		);
		$this->view ( 'home/profile');
		$this->view ( 'templates/footer_scripts');
		$this->view ( 'widgets/api_ajaxforms/profile' );
		$this->view ( 'templates/footer' );
		$this->view ( 'templates/finalize' );
		// debug var_dump($user);
	}

	public function contact ($var1=NULL, $var2=NULL) { // Set view


		$userModel = $this->model ( 'Users' );
		$userSession = $this->model ('AppFunctions');

		$this->view ( 'templates/header',
         	[ 'pageTitle' => 'Contact', ]);
		$this->view ( 'templates/css' );
		$this->view ( 'templates/header_scripts' );
		$this->view ( 'templates/body',
      		[ 'pageBodyId' => 'contact-us', ]);
		$this->view ( 'templates/menu_fixed' );
		$this->view ( 'templates/notifications',
			[
				'alert' => $userSession->showNotification("info","Contact"),
			]
		);
		$this->view ( 'home/contact' );
		$this->view ( 'templates/footer_scripts' );
		$this->view ( 'templates/footer' );
		$this->view ( 'templates/finalize' );
		unset($this->view);
	}

	public function billing ($var1=NULL, $var2=NULL) { // Set view


		$userModel = $this->model ( 'Users' );
		$userSession = $this->model ('AppFunctions');

		$this->view ( 'templates/header',
         	[ 'pageTitle' => 'Billing', ]);
		$this->view ( 'templates/css' );
		$this->view ( 'templates/header_scripts' );
		$this->view ( 'templates/body',
      		[ 'pageBodyId' => 'billing', ]);
		$this->view ( 'templates/menu_fixed' );
		$this->view ( 'templates/notifications',
			[
				'alert' => $userSession->showNotification("info","Billing"),
			]
		);
		$this->view ( 'home/billing' );
		$this->view ( 'templates/footer_scripts' );
		$this->view ( 'templates/footer' );
		$this->view ( 'templates/finalize' );
		unset($this->view);
	}

	public function invoices ($var1=NULL, $var2=NULL) { // Set view

		$userModel = $this->model ( 'Users' );
		$userSession = $this->model ('AppFunctions');

		$this->view ( 'templates/header',
         	[ 'pageTitle' => 'Invoices', ]);
		$this->view ( 'templates/css' );
		$this->view ( 'templates/header_scripts' );
		$this->view ( 'templates/body',
      		[ 'pageBodyId' => 'invoices', ]);
		$this->view ( 'templates/menu_fixed' );
		$this->view ( 'templates/notifications',
			[
				'alert' => $userSession->showNotification("info","Invoices"),
			]
		);
		$this->view ( 'home/invoices' );
		$this->view ( 'templates/footer_scripts' );
		$this->view ( 'templates/footer' );
		$this->view ( 'templates/finalize' );
		unset($this->view);
	}

	public function people ($var1=NULL, $var2=NULL) { // Set view
		// Establish your Model requirements (from file)
		$userModel = $this->model ( 'Users' );
		$userSession = $this->model ('AppFunctions');

		$this->view ( 'templates/session',
			[
				'redirect' => $userSession,
			]
		);
		$this->view ( 'templates/header',
   				 [ 'pageTitle' => 'People', ]);
		$this->view ( 'templates/css' );
		$this->view ( 'templates/header_scripts' );
		$this->view ( 'templates/body',
			  [ 'pageBodyId' => 'people', ]);
		$this->view ( 'templates/menu_fixed' );
		$this->view ( 'templates/notifications',
   			[
				'alert' => $userSession->showNotification("info","People"),
			]
		);
		$this->view ( 'home/people',
			[
				//'people' => // Call function to retried data(),
			]
		);
		$this->view ( 'templates/footer_scripts' );
		$this->view ( 'templates/footer' ); $this->view ( 'templates/finalize' );

		// debug var_dump($user);
	}

	public function locations ($var1=NULL, $var2=NULL) { // Set view
		$userSession = $this->model ('AppFunctions');
		$userModel = $this->model ( 'Users' );
		$this->view ( 'templates/session');
		$this->view ( 'processors/locations');
		$this->view ( 'templates/header',
			 [ 'pageTitle' => 'Locations', ]);
		$this->view ( 'templates/css' );
		$this->view ( 'templates/header_scripts' );
		$this->view ( 'templates/body',
			  [ 'pageBodyId' => 'locations', ]);
		$this->view ( 'templates/menu_fixed' );
		$this->view ( 'templates/notifications',
			[
				'alert' => $userSession->showNotification("info","Locations"),
			]
		);
		$this->view ( 'home/locations');
		$this->view ( 'templates/footer_scripts' );
		$this->view ( 'widgets/app_map_locations/widget');
		$this->view ( 'templates/footer' );
		$this->view ( 'templates/finalize' );
		// debug var_dump($user);
	}

	public function location ($var1=NULL, $var2=NULL) { // Set view
		// For strict modal use only
		$userSession = $this->model ('AppFunctions');

		$this->view ( 'templates/session' );
		$this->view ( 'templates/header',
         	[ 'pageTitle' => 'Location Details', ]);
		$this->view ( 'templates/css' );
		$this->view ( 'templates/header_scripts' );
		$this->view ( 'templates/body',
      		[ 'pageBodyId' => 'features', ]);
		//$this->view ( 'templates/menu_react' );
		 $this->view ( 'templates/notifications',
			[
				'alert' => $userSession->showNotification("info","The Controller is passing the followin variables: ($var1, $var2)"),
			]
		);
		$this->view ( 'home/location' );
		$this->view ( 'templates/finalize' );
		unset($this->view);
	}

	public function about ($var1=NULL, $var2=NULL) { // Set view
		$userSession = $this->model ('AppFunctions');

		$this->view ( 'templates/header',
         	[ 'pageTitle' => 'About', ]);
		$this->view ( 'templates/css' );
		$this->view ( 'templates/header_scripts' );
		$this->view ( 'templates/body',
      		[ 'pageBodyId' => 'about-us', ]);
		$this->view ( 'templates/menu_fixed' );
		$this->view ( 'templates/notifications',
			[
				//'alert' => $userSession->showNotification("info","About";
			]
		);
		$this->view ( 'home/about' );
		$this->view ( 'templates/footer_scripts' );
		$this->view ( 'templates/footer' );
		$this->view ( 'widgets/app_flexslider/widget' );
		$this->view ( 'templates/finalize' );
		unset($this->view);
	}

	public function support ($var1=NULL, $var2=NULL) { // Set view

		$userSession = $this->model ('AppFunctions');
		$userModel = $this->model ( 'Users' );

		$this->view ( 'templates/session' );

		$this->view ( 'templates/header' );
		$this->view ( 'templates/css' );
		$this->view ( 'templates/header_scripts' );
		$this->view ( 'templates/menu_fixed' );
		$this->view ( 'templates/notifications',
			[
				'alert' => $userSession->showNotification("info","Support"),
			]
		);		$this->view ( 'home/support',[]);
		$this->view ( 'templates/footer_scripts' );
		$this->view ( 'templates/footer' );
		$this->view ( 'templates/finalize' );

		// debug var_dump($user);
	}

	public function main ($var1=NULL, $var2=NULL) { // Set view
		$userModel = $this->model ( 'Users' );
		$userSession = $this->model ('AppFunctions');
			$this->view ( 'templates/session',
				[
					'redirect' => $userSession,
				]
			);
			$this->view ( 'templates/header',
				 [ 'pageTitle' => 'Home', ]);
			$this->view ( 'templates/css' );
			$this->view ( 'templates/header_scripts' );
			$this->view ( 'templates/body',
				  [ 'pageBodyId' => 'home', ]);
			$this->view ( 'templates/menu_fixed' );
			$this->view ( 'processors/main' );
			$this->view ( 'templates/notifications',
				[
					'alert' => $userSession->showNotification('info','Home page. '),
				]
			);
			$this->view ( 'home/main');
			$this->view ( 'templates/footer_scripts' );
			$this->view ( 'templates/footer' );
			$this->view ( 'templates/finalize' );
			unset($this->view);
	}

	public function logout ($var1=NULL, $var2=NULL) { // Set view
		$userSession = $this->model ('AppFunctions');

		$this->view ( 'templates/logout' );
		$this->view ( 'templates/header',
         	[ 'pageTitle' => 'You Are Logged Out', ]);
		$this->view ( 'templates/css' );
		$this->view ( 'templates/header_scripts' );
		$this->view ( 'templates/body',
      		[ 'pageBodyId' => 'not-found-alt', ]);
		$this->view ( 'templates/notifications',
			[
				//'alert' => $userSession->showNotification("info","You have been logged out of your session completely. ($var1, $var2)"),
			]
		);
		$this->view ( 'home/logout' );
		$this->view ( 'templates/footer_scripts' );
		//$this->view ( 'templates/footer' );
		$this->view ( 'widgets/app_flexslider/widget' );
		$this->view ( 'templates/finalize' );
		unset($this->view);
	}

	/* public function template ($var1=NULL, $var2=NULL) { // Set view
		$userSession = $this->model ('AppFunctions');
		$userModel = $this->model ( 'Users' );
		$this->view ( 'templates/session',
			[
				'redirect' => $userSession, // Pass session actions if redirect is TRUE
			]
		);
		$this->view ( 'templates/header' );
		$this->view ( 'templates/css' );
		$this->view ( 'templates/header_scripts' );
		$this->view ( 'templates/body',
			  [ 'pageBodyId' => '', ]);
		$this->view ( 'templates/menu_react' );
		//$this->view ( 'processors/locations' );
		$this->view ( 'templates/notifications',
			[
				'alert' => $userSession->showNotification("info","The Controller is passing the followin variables: ($var1, $var2)"),
			]
		);
		$this->view ( 'home/locations',
				[
					//'profile' => $userModel->getFullProfile(), // Get data to pass to view
				]
			);
		$this->view ( 'templates/footer_scripts' );
		$this->view ( 'templates/footer' );
		$this->view ( 'templates/finalize' );
		// debug var_dump($user);
	} */

	public function testing($var1 = '0', $var2 = '0', $var3 = '0', $var4 = '0', $var5 = '0') {
		echo "<hr>Controller home/testing says - ($var1, $var2, $var3,$var4, $var5)";
	}
}