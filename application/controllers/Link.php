<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Link extends CI_Controller {

	public function __constuct()
	{
		parent::__constuct();
		$this->load->model('auth');
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function reg()
	{
		$this->load->view('registration');
	}
	public function cont()
	{
		$this->load->view('contact');
	}
	public function register()
	{
		
			$arr['name']=$this->input->post('name');
			$arr['m_no']=$this->input->post('m_no');
			$arr['acc_no']=$this->input->post('acc_no');
			$arr['address']=$this->input->post('address');
			$arr['username']=$this->input->post('username');
			$arr['password']=$this->input->post('password');
			$cpass=$this->input->post('cpass');
			if($cpass==$arr['password'])
			{
				$set=$this->auth->register($arr);
					if(isset($set))
					{
						$this->load->view('header');
						$this->load->view('index');
						$this->load->view('footer');
					}
					else
					{
						$this->load->view('header');
						$this->load->view('registration');
						$this->load->view('footer');
					}
			}
			else
			{
				$this->load->view('header');
				$this->load->view('register');
				$this->load->view('footer');
			}
		
	}

	public function register_seller()
	{
		
			$arr['name']=$this->input->post('name');
			$arr['m_no']=$this->input->post('m_no');
			$arr['acc_no']=$this->input->post('acc_no');
			$arr['address']=$this->input->post('address');
			$arr['username']=$this->input->post('username');
			$arr['password']=$this->input->post('password');
			$cpass=$this->input->post('cpass');
			if($cpass==$arr['password'])
			{
				$set=$this->auth->register_seller($arr);
					if(isset($set))
					{
						$this->load->view('header');
						$this->load->view('index');
						$this->load->view('footer');
					}
					else
					{
						$this->load->view('header');
						$this->load->view('seller_registration');
						$this->load->view('footer');
					}
			}
			else
			{
				$this->load->view('header');
				$this->load->view('seller_registration');
				$this->load->view('footer');
			}
		
	}
	public function login()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$set=$this->auth->login($username,$password);
		if (isset($set)) {?>
			<script>window.alert('login sussessfully');</script>
			<?php
			$this->index();
		}
		else
		{
			?>

		<script type="text/javascript">window.alert('username or password is wrong please enter correct');</script>
		<?php
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
		}
	}
	public function login_seller()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$set=$this->auth->login_seller($username,$password);
		if (isset($set)) {?>
			<script>window.alert('login sussessfully');</script>
			<?php
			$this->index();
		}
		else
		{
			?>
		
		<script type="text/javascript">window.alert('username or password is wrong please enter correct');</script>
		
		<?php
		$this->load->view('header');
		$this->load->view('seller_login');
		$this->load->view('footer');
		}
	}
}
