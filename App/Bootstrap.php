<?php

namespace App;

class Bootstrap
{
	public static function Init () {

		// patch core to use extended debug class
		if (class_exists('\MvcCore\Ext\Debugs\Tracy')) {
			\MvcCore\Ext\Debugs\Tracy::$Editor = 'NotepadPP';
			\MvcCore\Application::GetInstance()->SetDebugClass('\MvcCore\Ext\Debugs\Tracy');
		}
		
		// set up application routes with custom names:
		\MvcCore\Router::GetInstance([
			'home'		=> [
				'match'		=> "#^/$#",
				'reverse'	=> '/',
				'controller'=> 'Index',
				'action'	=> 'Home',
			],
		]);

	}
}
