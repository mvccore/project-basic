<?php

class App_Controllers_Base extends MvcCore_Controller
{
	public function Init () {
		parent::Init();
		// do any initialization here:
			
	}
	public function PreDispatch () {
		parent::PreDispatch();
		if ($this->viewEnabled) {
			// do any prerender initialization here:
			
		}
	}
}