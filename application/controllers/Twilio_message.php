<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Twilio_message extends CI_Controller
{

	public function _construct()
	{
		parent::__construct();
		$this->load->helper("url");
	}
	// load view 
	public function index()
	{
		$this->load->view('message');
	}
	// send sms
	public function send_twiliosms()
	{
		//load twilio library
		$this->load->library('Twilio');
		$from = '**********'; // Twilio Number
		$to =  $this->input->post('phone_number',TRUE);
		$message = $this->input->post('text_msg',TRUE);
		if ($to != '' && $message != '') {
			$response = $this->twilio->sms($from, $to, $message);
			if ($response->IsError) {
				echo 'Error: ' . $response->ErrorMessage;
			} else {
				echo 'Message send succesfully ';
			}
		}
	}
}
