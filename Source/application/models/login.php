<?php 
///////////////////////////////////////////////////////////////////////////////////////////////////////
class login extends CI_Model
{

function create_tables(){

}

function create_user($username, $password){
	$data = array(
		'Id' => '',
		'User_Name' => $username,
		'User_Role' => '',
		'Password' => $password,
		'User_Position' => ''
		);
	$this->db->insert('users', $data);

}

 function user_login ($username, $password){
		$where=array(

			'User_Name' => $username,
			'Password' => $password
			);
		$this->db->select()->from('users')->where($where);
		$query=$this->db->get(); 
		return $query->first_row('array');
	}

}

//////////////////////////////////////////////////////////////////////////////////////////////////////
?>