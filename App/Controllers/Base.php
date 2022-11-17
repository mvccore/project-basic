<?php

namespace App\Controllers;

class Base extends \MvcCore\Controller {

	public function Init () {
		parent::Init();
		// do any initialization here:

	}

	public function PreDispatch () {
		parent::PreDispatch();
		if ($this->viewEnabled) {
			$this->_preDispatchSetUpBundles();
			$this->view->basePath = $this->GetRequest()->GetBasePath();
			// do any pre-render initialization here:

			// to load DEMO string formatter view helper into view local method:
			$this->view->GetHelper('format');
		}
	}

	private function _preDispatchSetUpBundles () {
		\MvcCore\Ext\Views\Helpers\Assets::SetGlobalOptions(
			(array) \MvcCore\Config::GetConfigSystem()->assets
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
