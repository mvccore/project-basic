<?php

class App_Controllers_Default extends App_Controllers_Base
{
    public function HomeAction () {
		$tables = array();
		try {
			$tables = App_Models_Base::GetAllDbTables();
		} catch (Exception $e) {
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