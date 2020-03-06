<?php

namespace App\Controllers;

use App\Models;

class Index extends Base {

	/**
	 * Render homepage.
	 * @return void
	 */
    public function HomeAction () {
		$this->view->title = 'MvcCore Project - Basic';
		$tables = array();
		try {
			$tables = Models\Base::GetAllDbTables();
		} catch (\Exception $e) {
			$this->view->errorMsg = $e->getMessage();
		}
		$this->view->tables = $tables;
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
		if ($code === 200) $code = 404;
		$message = $this->request->GetParam('message', 'a-zA-Z0-9_;, \\/\-\@\:\.');
		$message = preg_replace('#`([^`]*)`#', '<code>$1</code>', $message);
		$message = str_replace("\n", '<br />', $message);
		$this->view->title = "Error $code";
		$this->view->message = $message;
		$this->Render('error');
	}
}
