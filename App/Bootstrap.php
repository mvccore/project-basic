<?php

class App_Bootstrap
{
	public static function Init () {
		// patch core to use extended debug class
		MvcCoreExt_Tracy::$Editor = 'NotepadPP';
		MvcCore::GetInstance()->SetDebugClass(MvcCoreExt_Tracy::class);
		
		// set up application routes with custom names:
		MvcCore_Router::GetInstance()->SetRoutes(array(
			'home'		=> array(
				'pattern'		=> "#^/$#",
				'reverse'		=> '/',
				'controller'	=> 'Default',
				'action'		=> 'Home',
			),
		));
	}
}