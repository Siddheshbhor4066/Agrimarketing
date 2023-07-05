<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function about()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}
	public function codes()
	{
		$this->load->view('header');
		$this->load->view('codes');
		$this->load->view('footer');
	}
	public function gallery()
	{
		$this->load->view('header');
		$this->load->view('gallery');
		$this->load->view('footer');
	}
	public function contact()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');	
	}
	public function register()
	{
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');	
	} 
	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
	public function seller_register()
	{
		$this->load->view('header');
		$this->load->view('seller_registration');
		$this->load->view('footer');	
	} 
	public function seller_login()
	{
		$this->load->view('header');
		$this->load->view('seller_login');
		$this->load->view('footer');
	}
}
