<?php

require_once WWW_ROOT . 'controller' . DS . 'Controller.php';

require_once WWW_ROOT . 'dao' . DS . 'FormDAO.php';

class FormController extends Controller {

	function __construct() {
		$this->formDAO = new FormDAO();
	}

	public function index() {
		if (!empty($_POST)) {
			$this -> handleFormPost();
		}
	}

	private function handleFormPost() {
		$data = $_POST;
	    if($this->formDAO->insert($data)) {
	        $this->redirect('result.html');
	    }

	    else {
	    	$this->redirect('index.php');
	    }
	}

}