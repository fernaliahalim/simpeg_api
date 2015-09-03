<?php
	/**
	* 
	*/
	class Permintaan_api_key_admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			//load model Dum_user_app_m
			$this->load->model('Dum_user_app_m');

			//load model User_m
			$this->load->model('User_m');

			//load model Aplikasi_m
			$this->load->model('Aplikasi_m');

			//load model User_app_m
			$this->load->model('User_app_m');
		}

		public function index(){
			//mengambil semua data dum_user_app
			$data = $this->Dum_user_app_m->get_all();
			//echo $data->num_rows;
			if($data->num_rows > 0){
				foreach ($data->result() as $data_db) {
					$id = $data_db->id;
					$id_user[] = $data_db->id_user;
					$id_aplikasi[] = $data_db->id_aplikasi;
				}

				for($i=0; $i<$data->num_rows; $i++){
					//setId_user pada model User_m
					$this->User_m->setId_user($id_user[$i]);

					$detail_user = $this->User_m->get_user_by_id();

					foreach ($detail_user->result() as $du) {
						$nama_user[] = $du->nama;
					}
				}


				for($j=0; $j<$data->num_rows; $j++){
					//setId_aplikasi pada model Aplikasi_m
					$this->Aplikasi_m->setId_aplikasi($id_aplikasi[$j]);

					$detail_aplikasi = $this->Aplikasi_m->get_detail_aplikasi();

					foreach($detail_aplikasi->result() as $da) {
						$nama_aplikasi[] = $da->nama_aplikasi;
					}
				}

				for($k=0; $k<$data->num_rows; $k++){
					//setid_user pada model User_app_m
					$this->User_app_m->setId_user($id_user[$k]);

					//setId_aplikasi pada model User_app_m
					$this->User_app_m->setId_aplikasi($id_aplikasi[$k]);

					$cek = $this->User_app_m->cek();

					$cek_user_app[] = $cek->num_rows;
				}

				$this->load->view('Header_admin_v');
				$this->load->view('Permintaan_api_key_admin_v', array('data' => $data, 'nama_user' => $nama_user, 'nama_aplikasi' => $nama_aplikasi, 'cek' => $cek_user_app));
				$this->load->view('Footer_admin_v');
			}
			else{
				$data = null;
				$nama_user = null;
				$nama_aplikasi = null;
				$cek_user_app = 0;

				$this->load->view('Header_admin_v');
				$this->load->view('Permintaan_api_key_admin_v', array('data' => $data, 'nama_user' => $nama_user, 'nama_aplikasi' => $nama_aplikasi, 'cek' => $cek_user_app));
				$this->load->view('Footer_admin_v');
			}
		}

		public function approve(){
			$id = $this->input->post('id');
			$user = $this->input->post('user');
			$app = $this->input->post('app');

			$user_app = array(
								'id_user' => $user,
								'id_aplikasi' => $app
							);

			//menambahkan data ke tabel user_app
			$tambah_user_app = $this->User_app_m->tambah_user_app($user_app);

			//echo $tambah_user_app;

			if($tambah_user_app > 0){
				//setId pada model Dum_user_app_m
				$this->Dum_user_app_m->setId($id);

				$hapus = $this->Dum_user_app_m->delete_row_dum();
			}

			redirect('Permintaan_api_key_admin');
		}
	}
?>