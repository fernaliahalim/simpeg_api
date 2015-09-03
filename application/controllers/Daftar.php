<?php
	/**
	* 
	*/
	class Daftar extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			//load model Aplikasi_m
			$this->load->model('Aplikasi_m');

			//load model User_m
			$this->load->model('User_m');

			//load model User_app_m
			$this->load->model('User_app_m');
			
			//load model Dum_user_app_m
			$this->load->model('Dum_user_app_m');

			//load array helper
			$this->load->helper('array');
		}

		public function index(){
			//mengambil semua data aplikasi dari database
			$all_apps = $this->Aplikasi_m->get_all();

			$this->load->view('Header_v');
			$this->load->view('Daftar_v', array('all_apps' => $all_apps));
			$this->load->view('Footer_v');
		}

		public function daftar_akun(){
			//mengambil input user
			$nama = $this->input->get('nama');
			$uname = $this->input->get('uname');
			$passwd = $this->input->get('passwd');
			$email = $this->input->get('email');
			$no_telp = $this->input->get('no_telp');
			$app = $this->input->get('jenis_app');

			//setUsername
			$this->User_m->setUsername($uname);

			//cek username
			$cek_uname = $this->User_m->search_user();

			if($cek_uname->num_rows > 0){
				$data = array('status' => 'error_uname');

				//mengambil semua data aplikasi dari database
				$all_apps = $this->Aplikasi_m->get_all();

				$this->load->view('Header_v');
				$this->load->view('Daftar_v', array('all_apps' => $all_apps, 'data' => $data));
				$this->load->view('Footer_v');
			}
			else{
				//array user
				$user = array(
								'nama' => $nama,
								'username' => $uname,
								'password' => md5($passwd),
								'email' => $email,
								'no_telp' => $no_telp,
								'flag' => 1 
								);

				//menambahkan data user baru
				$tambah_akun = $this->User_m->daftar_user($user);
	 			
	 			//mengambil id_user maximal
	 			$id_max = $this->User_m->get_max_id();
	 			foreach ($id_max->result() as $idm) {
	 				$idmax = $idm->id;
	 			}

	 			//set id_aplikasi
	 			$this->Aplikasi_m->setId_aplikasi($app);

	 			//mengambil data aplikasi
	 			$detail_app = $this->Aplikasi_m->get_detail_aplikasi();

	 			//array user app
	 			$user_app = array(
	 								'id_user' => $idmax,
	 								'id_aplikasi' => $app
	 								);

	 			//insert user_app
	 			$tambah_dum_user_app = $this->Dum_user_app_m->tambah_user_app($user_app);
	 			
	 			$this->load->view('Header_v');
	 			$this->load->view('Daftar_ok_v', array('user' => $user, 'detail_app' => $detail_app));
	 			$this->load->view('Footer_v');
	 		}
		}
	}
?>