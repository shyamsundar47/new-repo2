<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_controller extends CI_Controller
{
	public function index()
	{
print_r("test controller");
//$this->load->model('Test_model');
//		$data['test'] = $this->Test_model->test();
//		$this->load->view('Test_View',$data);
	}
	public function insert_data()
	{
		$this->load->model('Test_model');
		$result = $this->Test_model->insert_data();
		if($result)
		{
			echo "Data inserted";
		}
		else
			{
			echo "failed";
		}


	}
}


?>
