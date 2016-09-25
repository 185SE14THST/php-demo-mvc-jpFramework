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

class Controller
{

	protected function model($model) {
		require_once '../application/models/' . $model . '.php';
		return new $model();
	}

	protected function view($view, $data = []) {
		require_once '../application/views/'  . $view . '.php';
	}

}