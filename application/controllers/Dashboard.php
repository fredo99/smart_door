<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
   	{
      parent::__construct();
      if($this->session->userdata('login') != TRUE){
        $url=base_url();
        redirect($url);
	  }
	  $this->load->model('m_capacity');
   	}

	public function index()
	{	
		$data['dashboard_class'] = "active";
		$data['location'] = 'Dashboard';
		$capacity = $this->m_capacity->getCapacity()->row_array();
		$data['capacity'] = $capacity['capacity'];
		$data['in'] = $capacity['in_capacity'];
		$data['left'] = (int)$data['capacity'] - (int)$data['in'];
		$this->load->view('v_dashboard', $data);
	}


	public function set_capacity()
	{
		$capacity = $this->input->post('set');
		if ( function_exists( 'date_default_timezone_set' ) ){
    		date_default_timezone_set('Asia/Jakarta');
			$time = date("Y-m-d H:i:s");
		}
		$this->m_capacity->addCapacity($capacity, $time);

		$data= $this->m_capacity->getCapacity()->result();
		echo json_encode($data);
	}

	public function auto_count()
	{
		$data= $this->m_capacity->getCapacity()->result();
		echo json_encode($data);
	}

	// public function get_last_status(){
	// 	$status = $this->m_devices->getStatus($this->session->userdata('room_id'));
	// 	$data = array();
	// 	foreach($status as $row){
	// 		array_push($data,$row['status']);
	// 	}

	// 	// data [0] = lock [1] = lamp [3] = fan
	// 	echo json_encode($data);

	// }

}
