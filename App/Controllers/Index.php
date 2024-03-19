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
		$tables = [];
		try {
			$tables = Models\Base::GetAllDbTables();
		} catch (\Throwable $e) {
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
		$this->view->title = "Error {$code}";
		$this->view->message = $this->request->GetParam('message', FALSE);
		$this->Render('error');
	}
}
