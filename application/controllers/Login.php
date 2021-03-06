<?php
	/**
	* 
	*/
	class Login extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			//load model User_m
			$this->load->model('User_m');

			//array helper
			$this->load->helper('array');
		}

		public function index(){
			$this->load->view('Header_v');
			$this->load->view('Login_v');
			$this->load->view('Footer_v');
		}

		public function signup(){
			//mengambil input user
			$uname = $this->input->post('username');
			$passwd = $this->input->post('passwd');

			//setUsername, setPassword dan setFlag
			$this->User_m->setUsername($uname);
			$this->User_m->setPassword($passwd);
			$this->User_m->setFlag(1);

			//cek username dan password
			$cek_user = $this->User_m->get_user();
			if($cek_user->num_rows() > 0){
				foreach($cek_user->result() as $user){
					$id_user = $user->id_user;
					$username = $user->username;
				}

				//set session untuk id_user dan username user
				$this->session->set_userdata('simpeg_api_user', $id_user);
				$this->session->set_userdata('simpeg_api_uname', $username);
				
				redirect('Profil');
			}
			else{
				$data = array(
								'status_uname' => 'error_uname', 
								'status_password' => 'error_password'
								);

				$this->load->view('Header_v');
				$this->load->view('Login_v', array('data' => $data));
				$this->load->view('Footer_v');
			}
		}
	}
?>