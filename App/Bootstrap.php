<?php

namespace App;

class Bootstrap
{
	public static function Init () {

		// Patch core to use extended debug class:
		if (class_exists('\MvcCore\Ext\Debugs\Tracy')) {
			\MvcCore\Ext\Debugs\Tracy::$Editor = 'NotepadPP';
			\MvcCore\Application::GetInstance()->SetDebugClass('\MvcCore\Ext\Debugs\Tracy');
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

	}
}
