<?php
	/**
	* 
	*/
	class Admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index(){
			redirect('Aplikasi_admin');
		}
	}
?>