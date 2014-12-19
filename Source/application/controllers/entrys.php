<?php 

class Entrys extends CI_Controller {


	
	function __construct(){
			parent::__construct();
			$this->load->model('journal');
		}




	
	function index()
	{
		
		$data['debits'] = $this->journal->show_debit_entry();
		$data['credits'] = $this->journal->show_credit_entry();
		$data = retrieve_data($debits, $credits);
		$this->load->view('header');
		$this->load->view('book', $data);
		$this->load->view('footer');
	
	}

	function retrieve_data ($debit, $credit){
		// $data['debits'] = $this->journal->show_debit_entry();
		if (!empty($debits)) {
			foreach ($debits as $row) {
				$debitaccount = array();
				$debitaccount = $row; 
			}
			return $debitaccount;
		}

		
		// $data['credits'] = $this->journal->show_credit_entry();
		if (!empty($credits)) {
			foreach ($credits as $row) {
				$creditaccount = array();
				$creditaccount = $row;
			}
			return $creditaccount;
		}
		
		if (count($debitaccount)>0 && count($creditaccount) > 0) {
			$transection = array(
				'Debit_acc_name' => $debitaccount,
				'Credit_acc_name' => $creditaccount
			);
		}

		return $transection;
	}


	public function new_entry()
	{
		if ($_POST) {
			$data = array (
			'Id' => '',
			'Account_Name' => $_POST['dracc'],
			'Amount' => $_POST['dramnt'],
			'Voucher_Id' =>''
			
			);
			$data2 = array(
				'Id' => '',
				'Account_Name' => $_POST['cracc'],
				'Amount' => $_POST['cramnt'],
				'Voucher_Id' => ''
				
				);
			$data3 = array(
				'Voucher_No' => $_POST['vno'],
				'Chk_No' => $_POST['cno'],
				'Recipt_No' => $_POST['rno'],
				);
			$this->journal->add_entry($data, $data2, $data3);
			redirect(base_url().'entrys/');
		}else{
			$this->load->view('header');
			$this->load->view('book');
			$this->load->view('footer');
		}
	}
}


?>