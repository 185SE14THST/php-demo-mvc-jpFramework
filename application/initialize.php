<?php
/**
 * PHP MVC template to controls core functions of application
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

// Include core functionality of application

// Handles roouting, and views
//require_once 'config/config.php';

// Handles roouting, and views
require_once 'engine/Application.php';

// Handle models
require_once 'engine/Controller.php';

// Public web assets
define ( 'ASSET_ROOT', 'https://' . $_SERVER ['HTTP_HOST'] . str_replace($_SERVER['DOCUMENT_ROOT'],'',
		str_replace ( '\\', '/', dirname ( __DIR__ ) . '/public' ))) ;
define ( 'START_KEY', '?start=');

/*
 * Company details
 */
define('MY_COMPANY', 'jpFramework v3');
define('MY_ADDRESS1', '185 SE 14th Ter');
define('MY_ADDRESS2', 'Miami, FL 33131');
define('MY_EMAIL', 'anonymous@github.com');
define('MY_WWW', 'www.website.com');
define('MY_PHONE', '305-349-5200');

/*
 * Google API Keys
 */
define('MAP_BROWSER', 'AIzaSyAnikejZmIHh1X-v7mrod4PUea1rkE9_Tk');

?>