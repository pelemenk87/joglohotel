<?php

/**
 * 
 */
class Home extends CI_Controller
{
	
	public function index(){
		$this->load->view("home/home-header");
		$this->load->view("home/home-footer");
	}
}