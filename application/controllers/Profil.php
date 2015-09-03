<?php
	/**
	* 
	*/
	class Profil extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			//load User_m
			$this->load->model('User_m');

			//load User_app_m
			$this->load->model('User_app_m');

			//load Aplikasi_m
			$this->load->model('Aplikasi_m');
		}

		public function index(){
			//mengambil session simpeg_api_user
			$id_user = $this->session->userdata('simpeg_api_user');

			//setId_user pada model User_m
			$this->User_m->setId_user($id_user);

			//get_user_by_id pada model User_m
			$get_user = $this->User_m->get_user_by_id();


			//setId_user pada model User_app_m
			$this->User_app_m->setId_user($id_user);

			//get_aplikasi_by_user pada model User_app_m
			$get_app = $this->User_app_m->get_aplikasi_by_user();

			if($get_app->num_rows > 0){
				foreach($get_app->result() as $aplikasi){
					$id_app[] = $aplikasi->id_aplikasi;
				}

				$error = '';

				//loop untuk mendapatkan data aplikasi
				for($i=0; $i<$get_app->num_rows(); $i++){
					//setId_aplikasi pada model Aplikasi_m
					$this->Aplikasi_m->setId_aplikasi($id_app[$i]);
					//memanggil fungsi get_detail_aplikasi pada model Aplikasi_m
					$get_detail_app = $this->Aplikasi_m->get_detail_aplikasi();
					foreach ($get_detail_app->result() as $detail_app) {
						$nama_aplikasi[] = $detail_app->nama_aplikasi;
						$api_key[] = $detail_app->api_key;
					}
				}
				//mengambil semua data aplikasi dari database
				$all_apps = $this->Aplikasi_m->get_all();

				//mengambil jumlah data aplikasi
				$row_app = $this->Aplikasi_m->get_row();

				$this->load->view('Header_v');
				$this->load->view('Profil_v', array('user' => $get_user, 'user_app' => $get_app, 'app' => $nama_aplikasi, 'app_key' => $api_key, 'all_apps' => $all_apps, 'row_app' => $row_app, 'error' => $error));
				$this->load->view('Footer_v');
			}
			else{
				$nama_aplikasi = null;
				$api_key = null;
				$error = null;

				//mengambil semua data aplikasi dari database
				$all_apps = $this->Aplikasi_m->get_all();

				//mengambil jumlah data aplikasi
				$row_app = $this->Aplikasi_m->get_row();
				
				$this->load->view('Header_v');
				$this->load->view('Profil_v', array('user' => $get_user, 'user_app' => $get_app, 'app' => $nama_aplikasi, 'app_key' => $api_key, 'all_apps' => $all_apps, 'row_app' => $row_app, 'error' => $error));
				$this->load->view('Footer_v');
			}
		}

		public function ubah_profil(){
			$id = $this->input->post('id_user_edit');
			$nama = $this->input->post('nama_edit');
			$uname = $this->input->post('username_edit');
			$passwd = $this->input->post('password_edit');
			$email = $this->input->post('email_edit');
			$telp = $this->input->post('telp_edit');

			//setUsername untuk model User_m
			$this->User_m->setUsername($uname);

			
			//setId_user untuk model User_m
			$this->User_m->setId_user($id);

			//membuat array user
			$data = array(
							'nama' => $nama,
							'username' => $uname,
							'email' => $email,
							'no_telp' => $telp
						);
					
			$update_user = $this->User_m->ubah_user($data);

			redirect('Profil');
		}

		public function ubah_nama(){
			$id = $this->input->post('id_user_edit');
			$nama = $this->input->post('nama_edit');

			//setId_user untuk model User_m
			$this->User_m->setId_user($id);

			$data = array(
							'nama' => $nama
						);

			$update_user = $this->User_m->ubah_user($data);

			if($update_user>0){
				redirect('Profil');
			}
			else{
				$error = "gagal dalam merubah nama!";

				//mengambil session simpeg_api_user
				$id_user = $this->session->userdata('simpeg_api_user');

				//setId_user pada model User_m
				$this->User_m->setId_user($id_user);

				//get_user_by_id pada model User_m
				$get_user = $this->User_m->get_user_by_id();

				//setId_user pada model User_app_m
				$this->User_app_m->setId_user($id_user);

				//get_aplikasi_by_user pada model User_app_m
				$get_app = $this->User_app_m->get_aplikasi_by_user();
				foreach($get_app->result() as $aplikasi){
					$id_app[] = $aplikasi->id_aplikasi;
				}

				//loop untuk mendapatkan data aplikasi
				for($i=0; $i<$get_app->num_rows(); $i++){
					//setId_aplikasi pada model Aplikasi_m
					$this->Aplikasi_m->setId_aplikasi($id_app[$i]);
					//memanggil fungsi get_detail_aplikasi pada model Aplikasi_m
					$get_detail_app = $this->Aplikasi_m->get_detail_aplikasi();
					foreach ($get_detail_app->result() as $detail_app) {
						$nama_aplikasi[] = $detail_app->nama_aplikasi;
						$api_key[] = $detail_app->api_key;
					}
				}

				//mengambil semua data aplikasi dari database
				$all_apps = $this->Aplikasi_m->get_all();

				//mengambil jumlah data aplikasi
				$row_app = $this->Aplikasi_m->get_row();

				$this->load->view('Header_v');
				$this->load->view('Profil_v', array('user' => $get_user, 'user_app' => $get_app, 'app' => $nama_aplikasi, 'app_key' => $api_key, 'all_apps' => $all_apps, 'row_app' => $row_app, 'error' => $error));
				$this->load->view('Footer_v');
			}
		}

		public function ubah_username(){
			$id = $this->input->post('id_user_edit');
			$uname = $this->input->post('username_edit');

			//setUsername untuk model User_m
			$this->User_m->setUsername($uname);

			//cek username
			$cek_username = $this->User_m->search_user();

			if(!($cek_username->num_rows > 0)){
				//setId_user untuk model User_m
				$this->User_m->setId_user($id);

				$data = array(
								'username' => $uname
							);

				$update_user = $this->User_m->ubah_user($data);

				redirect('Profil');
			}
			else{
				$error = "username yang Anda masukkan sudah ada!";

				//mengambil session simpeg_api_user
				$id_user = $this->session->userdata('simpeg_api_user');

				//setId_user pada model User_m
				$this->User_m->setId_user($id_user);

				//get_user_by_id pada model User_m
				$get_user = $this->User_m->get_user_by_id();

				//setId_user pada model User_app_m
				$this->User_app_m->setId_user($id_user);

				//get_aplikasi_by_user pada model User_app_m
				$get_app = $this->User_app_m->get_aplikasi_by_user();
				foreach($get_app->result() as $aplikasi){
					$id_app[] = $aplikasi->id_aplikasi;
				}

				//loop untuk mendapatkan data aplikasi
				for($i=0; $i<$get_app->num_rows(); $i++){
					//setId_aplikasi pada model Aplikasi_m
					$this->Aplikasi_m->setId_aplikasi($id_app[$i]);
					//memanggil fungsi get_detail_aplikasi pada model Aplikasi_m
					$get_detail_app = $this->Aplikasi_m->get_detail_aplikasi();
					foreach ($get_detail_app->result() as $detail_app) {
						$nama_aplikasi[] = $detail_app->nama_aplikasi;
						$api_key[] = $detail_app->api_key;
					}
				}

				//mengambil semua data aplikasi dari database
				$all_apps = $this->Aplikasi_m->get_all();

				//mengambil jumlah data aplikasi
				$row_app = $this->Aplikasi_m->get_row();

				$this->load->view('Header_v');
				$this->load->view('Profil_v', array('user' => $get_user, 'user_app' => $get_app, 'app' => $nama_aplikasi, 'app_key' => $api_key, 'all_apps' => $all_apps, 'row_app' => $row_app, 'error' => $error));
				$this->load->view('Footer_v');
			}
		}

		public function ubah_password(){
			$id = $this->input->post('id_user_edit');
			$passwd1 = $this->input->post('password_edit1');
			$passwd2 = $this->input->post('password_edit2');

			if($passwd1 == $passwd2){
				//setId_user untuk model User_m
				$this->User_m->setId_user($id);

				$data = array(
								'password' => md5($passwd1)
							);

				$update_user = $this->User_m->ubah_user($data);

				redirect('Profil');
			}
			else{
				$error = "password yang Anda masukkan tidak sama!";

				//mengambil session simpeg_api_user
				$id_user = $this->session->userdata('simpeg_api_user');

				//setId_user pada model User_m
				$this->User_m->setId_user($id_user);

				//get_user_by_id pada model User_m
				$get_user = $this->User_m->get_user_by_id();

				//setId_user pada model User_app_m
				$this->User_app_m->setId_user($id_user);

				//get_aplikasi_by_user pada model User_app_m
				$get_app = $this->User_app_m->get_aplikasi_by_user();
				foreach($get_app->result() as $aplikasi){
					$id_app[] = $aplikasi->id_aplikasi;
				}

				//loop untuk mendapatkan data aplikasi
				for($i=0; $i<$get_app->num_rows(); $i++){
					//setId_aplikasi pada model Aplikasi_m
					$this->Aplikasi_m->setId_aplikasi($id_app[$i]);
					//memanggil fungsi get_detail_aplikasi pada model Aplikasi_m
					$get_detail_app = $this->Aplikasi_m->get_detail_aplikasi();
					foreach ($get_detail_app->result() as $detail_app) {
						$nama_aplikasi[] = $detail_app->nama_aplikasi;
						$api_key[] = $detail_app->api_key;
					}
				}

				//mengambil semua data aplikasi dari database
				$all_apps = $this->Aplikasi_m->get_all();

				//mengambil jumlah data aplikasi
				$row_app = $this->Aplikasi_m->get_row();

				$this->load->view('Header_v');
				$this->load->view('Profil_v', array('user' => $get_user, 'user_app' => $get_app, 'app' => $nama_aplikasi, 'app_key' => $api_key, 'all_apps' => $all_apps, 'row_app' => $row_app, 'error' => $error));
				$this->load->view('Footer_v');
			}
		}

		public function ubah_email(){
			$id = $this->input->post('id_user_edit');
			$email = $this->input->post('email_edit');

			//setEmail untuk model User_m
			$this->User_m->setEmail($email);

			//cek email
			$cek_email = $this->User_m->cek_email();

			if(!($cek_email->num_rows > 0)){
				//setId_user untuk model User_m
				$this->User_m->setId_user($id);

				$data = array(
								'email' => $email
							);

				$update_user = $this->User_m->ubah_user($data);

				redirect('Profil');
			}
			else{
				$error = "email yang Anda masukkan sudah terdaftar!";

				//mengambil session simpeg_api_user
				$id_user = $this->session->userdata('simpeg_api_user');

				//setId_user pada model User_m
				$this->User_m->setId_user($id_user);

				//get_user_by_id pada model User_m
				$get_user = $this->User_m->get_user_by_id();

				//setId_user pada model User_app_m
				$this->User_app_m->setId_user($id_user);

				//get_aplikasi_by_user pada model User_app_m
				$get_app = $this->User_app_m->get_aplikasi_by_user();
				foreach($get_app->result() as $aplikasi){
					$id_app[] = $aplikasi->id_aplikasi;
				}

				//loop untuk mendapatkan data aplikasi
				for($i=0; $i<$get_app->num_rows(); $i++){
					//setId_aplikasi pada model Aplikasi_m
					$this->Aplikasi_m->setId_aplikasi($id_app[$i]);
					//memanggil fungsi get_detail_aplikasi pada model Aplikasi_m
					$get_detail_app = $this->Aplikasi_m->get_detail_aplikasi();
					foreach ($get_detail_app->result() as $detail_app) {
						$nama_aplikasi[] = $detail_app->nama_aplikasi;
						$api_key[] = $detail_app->api_key;
					}
				}

				//mengambil semua data aplikasi dari database
				$all_apps = $this->Aplikasi_m->get_all();

				//mengambil jumlah data aplikasi
				$row_app = $this->Aplikasi_m->get_row();

				$this->load->view('Header_v');
				$this->load->view('Profil_v', array('user' => $get_user, 'user_app' => $get_app, 'app' => $nama_aplikasi, 'app_key' => $api_key, 'all_apps' => $all_apps, 'row_app' => $row_app, 'error' => $error));
				$this->load->view('Footer_v');
			}
		}

		public function ubah_telp(){
			$id = $this->input->post('id_user_edit');
			$telp = $this->input->post('telp_edit');

			//setId_user untuk model User_m
			$this->User_m->setId_user($id);

			$data = array(
							'no_telp' => $telp
						);

			$update_user = $this->User_m->ubah_user($data);

			if($update_user > 0){
				redirect('Profil');
			}
			else{
				$error = "gagal dalam merubah no.telepon!";

				//mengambil session simpeg_api_user
				$id_user = $this->session->userdata('simpeg_api_user');

				//setId_user pada model User_m
				$this->User_m->setId_user($id_user);

				//get_user_by_id pada model User_m
				$get_user = $this->User_m->get_user_by_id();

				//setId_user pada model User_app_m
				$this->User_app_m->setId_user($id_user);

				//get_aplikasi_by_user pada model User_app_m
				$get_app = $this->User_app_m->get_aplikasi_by_user();
				foreach($get_app->result() as $aplikasi){
					$id_app[] = $aplikasi->id_aplikasi;
				}

				//loop untuk mendapatkan data aplikasi
				for($i=0; $i<$get_app->num_rows(); $i++){
					//setId_aplikasi pada model Aplikasi_m
					$this->Aplikasi_m->setId_aplikasi($id_app[$i]);
					//memanggil fungsi get_detail_aplikasi pada model Aplikasi_m
					$get_detail_app = $this->Aplikasi_m->get_detail_aplikasi();
					foreach ($get_detail_app->result() as $detail_app) {
						$nama_aplikasi[] = $detail_app->nama_aplikasi;
						$api_key[] = $detail_app->api_key;
					}
				}

				//mengambil semua data aplikasi dari database
				$all_apps = $this->Aplikasi_m->get_all();

				//mengambil jumlah data aplikasi
				$row_app = $this->Aplikasi_m->get_row();

				$this->load->view('Header_v');
				$this->load->view('Profil_v', array('user' => $get_user, 'user_app' => $get_app, 'app' => $nama_aplikasi, 'app_key' => $api_key, 'all_apps' => $all_apps, 'row_app' => $row_app, 'error' => $error));
				$this->load->view('Footer_v');
			}
		}

		public function tambah_app(){
			$id_user = $this->session->userdata('simpeg_api_user');
			$app = $this->input->post('jenis_app');

			$data_user = array(
									'id_user' => $id_user,
									'id_aplikasi' => $app
								);

			//setId_user pada model User_app_m
			$this->User_app_m->setId_user($id_user);

			//setId_aplikasi pada model User_app_m
			$this->User_app_m->setId_aplikasi($app);

			$cek = $this->User_app_m->cek();

			if(!($cek->num_rows > 0)){
				$tambah_app = $this->User_app_m->tambah_user_app($data_user);

				redirect('Profil');
			}
			else{
				$error = "aplikasi yang Anda tambahkan sudah ada pada daftar aplikasi Anda!";

				//mengambil session simpeg_api_user
				$id_user = $this->session->userdata('simpeg_api_user');

				//setId_user pada model User_m
				$this->User_m->setId_user($id_user);

				//get_user_by_id pada model User_m
				$get_user = $this->User_m->get_user_by_id();

				//setId_user pada model User_app_m
				$this->User_app_m->setId_user($id_user);

				//get_aplikasi_by_user pada model User_app_m
				$get_app = $this->User_app_m->get_aplikasi_by_user();
				foreach($get_app->result() as $aplikasi){
					$id_app[] = $aplikasi->id_aplikasi;
				}

				//loop untuk mendapatkan data aplikasi
				for($i=0; $i<$get_app->num_rows(); $i++){
					//setId_aplikasi pada model Aplikasi_m
					$this->Aplikasi_m->setId_aplikasi($id_app[$i]);
					//memanggil fungsi get_detail_aplikasi pada model Aplikasi_m
					$get_detail_app = $this->Aplikasi_m->get_detail_aplikasi();
					foreach ($get_detail_app->result() as $detail_app) {
						$nama_aplikasi[] = $detail_app->nama_aplikasi;
						$api_key[] = $detail_app->api_key;
					}
				}

				//mengambil semua data aplikasi dari database
				$all_apps = $this->Aplikasi_m->get_all();

				//mengambil jumlah data aplikasi
				$row_app = $this->Aplikasi_m->get_row();

				$this->load->view('Header_v');
				$this->load->view('Profil_v', array('user' => $get_user, 'user_app' => $get_app, 'app' => $nama_aplikasi, 'app_key' => $api_key, 'all_apps' => $all_apps, 'row_app' => $row_app, 'error' => $error));
				$this->load->view('Footer_v');
			}
		}
	}
?>