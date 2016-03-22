<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()	{
  
    
    
    $this->load->view('location_form');
	}

	public function send() {
		echo "<pre>";


		$msg = "Location Request Form\n";
		$msg = $msg . "Location Code: " . $this->input->post('locationcode') . "\n";
		$msg = $msg . "Location Name: " . $this->input->post('locationname') . "\n";
		$msg = $msg . "Spine Label : " . $this->input->post('spinelabelname') . "\n";
		$msg = $msg . "OPAC Display Name : " . $this->input->post('opacdisplayname') . "\n";
		$msg = $msg . "Display in WebVoyage : " . $this->input->post('display') . "\n";

		echo $msg;
	}
}
