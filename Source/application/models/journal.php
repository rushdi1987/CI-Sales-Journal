<?php 
///////////////////////////////////////////////////////////////////////////////////////////////////////
class Journal extends CI_Model
{

	

	function show_debit_entry($num=20, $start=0)
	{
		$this->db->select()->order_by('id', 'desc')->limit($num, $start); 
		$query = $this->db->get('debits');
		return $query->result_array();
		
	}

	function show_credit_entry($num=20, $start=0)
	{
		
		$this->db->select()->from('credits')->order_by('id', 'desc')->limit($num, $start); 
		$query2 = $this->db->get();		
		return $query2->result_array();
	}

	

	function add_entry($data, $data2, $data3){ 

		$this->db->insert('vouchers', $data3); 
		// here collect the last inserted id using $this->db->insert_id(); and assign it to foreign key // of the table 
		$data['Voucher_Id'] = $this->db->insert_id(); 
		$this->db->insert('debits', $data); 

		// similarly for credits 
		$data2['Voucher_Id'] = $data['Voucher_Id'];
		$this->db->insert('credits', $data2); 


		}

	}

///////////////////////////////////////////////////////////////////////////////////////////////////////
?>