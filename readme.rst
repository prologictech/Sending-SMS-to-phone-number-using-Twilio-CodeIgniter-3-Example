###################
Sending-SMS-to-phone-number-using-Twilio-CodeIgniter-3-Example
###################

A demonsestartion how to send SMS to phone number using Twilio in CodeIgniter 3

*******************
Dependencies
*******************

Need Twilio account
Twilio Number

**************************
Instructions:
**************************

First setup ``CodeIgniter 3`` Framework.
```
Create Controller (Twilio_message.php) 
		<?php 
			defined('BASEPATH') or exit('No direct script access allowed'); 

			class Twilio_message extends CI_Controller { 
				
			} 
		?> 
```
Install Twilio Helper library. ``` composer require twilio/sdk ``` or download through Twilio official site.

Send SMS :-
```
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
	```
