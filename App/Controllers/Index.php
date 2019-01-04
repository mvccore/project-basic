<?php

namespace App\Controllers;

use App\Models;

class Index extends Base
{
	/**
	 * Render homepage.
	 * @return void
	 */
    public function HomeAction ()
	{
		$tables = array();
		try {
			$tables = Models\Base::GetAllDbTables();
		} catch (\Exception $e) {
			$this->view->ErrorMsg = $e->getMessage();
		}
		$this->view->Tables = $tables;
		$this->view->Title = 'MvcCore Project - Basic';
    }

    /**
	 * Render not found action.
	 * @return void
	 */
	public function NotFoundAction(){
		$this->ErrorAction();
	}

	/**
	 * Render possible server error action.
	 * @return void
	 */
	public function ErrorAction () {
		$code = $this->response->GetCode();
		$message = $this->request->GetParam('message', '\\a-zA-Z0-9_;, /\-\@\:');
		$message = preg_replace('#`([^`]*)`#', '<code>$1</code>', $message);
		$message = str_replace("\n", '<br />', $message);
		$this->view->Title = "Error $code";
		$this->view->Message = $message;
		$this->Render('error');
	}
}
