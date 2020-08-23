<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		 $this->data["mainview"] = "home/index";
		   $this->load->view('layouts/main', $this->data);
		
	}
}
