<?php

namespace App\Controllers;

use App\Models;

class Index extends Base
{
    public function HomeAction () {
		$tables = array();
		try {
			$tables = Models\Base::GetAllDbTables();
		} catch (\Exception $e) {
			$this->view->ErrorMsg = $e->getMessage();
		}
		$this->view->Tables = $tables;
		$this->view->Title = 'MvcCore Project - Basic';
    }
    public function NotFoundAction () {
		$this->view->Title = "Error 404 - requested page not found.";
		$this->view->Message = $this->request->Params['message'];
    }
}