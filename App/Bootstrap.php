<?php

namespace App;

class Bootstrap {
	public static function Init () {
		// patch core to use extended debug class
		if (class_exists('\MvcCore\Ext\Debug\Tracy')) {
			\MvcCore\Ext\Debug\Tracy::$Editor = 'NotepadPP';
			\MvcCore::GetInstance()->SetDebugClass(\MvcCore\Ext\Debug\Tracy::class);
		}
		
		// set up application routes with custom names:
		\MvcCore\Router::GetInstance(array(
			'home'		=> array(
				'pattern'		=> "#^/$#",
				'reverse'		=> '/',
				'controller'	=> 'Index',
				'action'		=> 'Home',
			),
		));
	}
}