<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Auth extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function register($arr)
		{
			$query=$this->db->insert('user_registration',$arr);
			return $query;
		}
		public function login($username,$password)
		{
			$query= $this->db->query("select * from user_registration where username=$username and password=$password");
			return $query;
							 
		}
		public function register_seller($arr)
		{
			$query=$this->db->insert('seller_registration',$arr);
			return $query;
		}
		public function login_seller($username,$password)
		{
			$query= $this->db->query("select * from seller_registration where username=$username and password=$password");
			return $query;
							 
		}
   
}