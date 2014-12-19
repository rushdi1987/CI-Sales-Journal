<?php 
class Users extends CI_Controller {

	function __construct(){
				parent::__construct();
				$this->load->model('login');
			}


	function index(){	
		$data['error']=0;
		$this->load->view('header');
		$this->load->view('enter', $data);
		$this->load->view('footer');
		
	}

	function login() {
		

		if ($_POST) {
			
			$username=$this->input->post('uname');
			$password=$this->input->post(sha1('pass'));
			$login=$this->login->user_login($username, $password);

			if (!$login) {
				$data['error']=1;
			 } else { 
				$this->session->set_userdata('userID', $login['Password']);
				$this->session->set_userdata('user_name', $login['User_Name']);
				redirect(base_url().'entrys');
			}
			
		} 
		$this->load->view('header');
		$this->load->view('enter', $data);
		$this->load->view('footer');
		
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'users');
	}

	function new_user(){

		if ($_POST) {

			$username = $_POST['uname'];
			$password = $_POST['pass'];
			$this->login->create_user($username, $password);
			$this->load->view('header');
			$this->load->view('enter_again');
			$this->load->view('footer');

			
		} else {

			$this->load->view('header');
			$this->load->view('new_user');
			$this->load->view('footer');
		}
		
	}

}
?>