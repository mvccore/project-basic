<?php

namespace App;

class Bootstrap {

	/**
	 * @return \MvcCore\Application
	 */
	public static function Init () {
		
		$app = \MvcCore\Application::GetInstance();

		// Patch core to use extended debug class:
		if (class_exists('\MvcCore\Ext\Debugs\Tracy')) {
			\MvcCore\Ext\Debugs\Tracy::$Editor = 'NotepadPP';
			$app->SetDebugClass('\MvcCore\Ext\Debugs\Tracy');
		}

		// Set up application routes with custom names:
		\MvcCore\Router::GetInstance([
			'home'			=> [
				'match'			=> "#^/(index.php)?$#",
				'reverse'		=> '/',
				'controller'	=> 'Index',
				'action'		=> 'Home',
			],
			/*'my_name'	=> [
				'pattern'		=> "/my-path[/<my_param>]',
				'controller'	=> 'MyController',
				'action'		=> 'Index',
				'my_param'		=> NULL,
			],*/
		]);

		return $app;
	}
}
