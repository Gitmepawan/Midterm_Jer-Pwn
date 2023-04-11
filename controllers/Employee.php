<?php
require_once('./models/EmployeeModel.php');


class Employee {

private $model;

public function __construct() {
	$this->model = new EmployeeModel();
}



public function loadViews() {
	//get content through the model
	//load views that match the content
	require_once('views/head.php');
	require_once('views/nav.php');
	require_once('views/emp_search.php');


	if(isset($_GET['id']) && !isset($_GET['task'])) {

		$employees = $this->model->getOne($_GET['id']);
		require_once('views/emp_detail.php');



	}else if(isset($_GET['str'])) {

		$employees = $this->model->search('emp_lname',$_GET['str']);
		$rows = $this->model->rows;
		require_once('views/emp_list.php');




	}else if(isset($_GET['task'])) {
		if($_GET['task'] == 'create') {
				$values = ['Bertinelli','Valerie','CFO','person3.jpg','person3th.jpg'];
			//POST values from a form
			$formvalues = ['Bertinelli','Valerie','CFO','person3.jpg','person3th.jpg'];
			$employees = $this->model->newEmployee($formvalues);
			// require_once('views/emp_create.php');
			header("location:index.php");
		}else if($_GET['task'] == 'delete') {
			$employees = $this->model->deleteEmployee($_GET['id']);
			header("location:index.php");
		}else if($_GET['task'] == 'update') {
			
			//POST values from a form, could also be hidden field for id value
			$formvalues = ['Van Halen','Valerie','CFO','person3.jpg','person3th.jpg',$_GET['id']];
			$employees = $this->model->updateEmployee($formvalues);
			header("location:index.php");
		}

		
// default route:localhost:8888/employees

	}else{ 
		$employees = $this->model->getAll();
		$rows = $this->model->rows;
		require_once('views/emp_list.php');
	}

	require_once('views/footer.php');
}

}