<?php

namespace App\Controllers;

class Base extends \MvcCore\Controller
{
	public function Init () {
		parent::Init();
		// do any initialization here:
			
	}
	public function PreDispatch () {
		parent::PreDispatch();
		if ($this->viewEnabled) {
			$this->_preDispatchSetUpBundles();
			// do any prerender initialization here:
			
		}
	}
	private function _preDispatchSetUpBundles () {
		\MvcCore\Ext\View\Helpers\Assets::SetGlobalOptions(
			(array) \MvcCore\Config::GetSystem()->assets
		);
		$static = self::$staticPath;
		$this->view->Css('fixedHead')
			->AppendRendered($static . '/css/fonts.css')
			->AppendRendered($static . '/css/all.css');
		$this->view->Js('fixedHead')
			->Append($static . '/js/libs/class.min.js')
			->Append($static . '/js/libs/ajax.min.js')
			->Append($static . '/js/libs/Module.js');
		$this->view->Js('varFoot')
			->Append($static . '/js/Front.js');
	}
}