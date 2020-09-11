<?php

class Test_model extends CI_Model
{
	public function test(){
			 $query = $this->db->get('test');
		     return $query->result();

	}
	public function insert_data(){
		$name  = $this->input->post('name');
		$email = $this->input->post('email');
		$data = $this->db->insert('test',['name'=>$name,'email'=>$email]);

		if($data){
			return True;
		}
		else{
			return False;
		}


	}
}



?>
