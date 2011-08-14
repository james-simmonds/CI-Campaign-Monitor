<?php

class Example extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
				
		// Load the Campaign monitor library
		$this->load->library('cmonitor');
	}

	
	function index()
	{
		//$this->load->library('cmonitor');
		
		$email = 'example@example.com';
		// get the list id based on a name
		$list = '21c90358ae309a2f525a1ad7d42d87e4';
		// run the request		
		$result = $this->cmonitor->get_request('subscribers/'.$list.'.json?email='.urlencode($email));
		return $result;
	}

}
	
/* End of file example.php */
/* Location: ./application/controllers/example.php */