<?php
	/**
	* 
	*/
	class Aplikasi_admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			//array helper
			$this->load->helper('array');

			//load model Aplikasi_m
			$this->load->model('Aplikasi_m');

			//load model Log_api_m
			$this->load->model('Log_api_m');

			//load model Api_akses_m
			$this->load->model('Api_akses_m');

			//load model User_app_m
			$this->load->model('User_app_m');
		}

		public function index(){
			//mengambil semua data aplikasi
			$all_app = $this->Aplikasi_m->get_all();

			$this->load->view('Header_admin_v');
			$this->load->view('Aplikasi_admin_v', array('all_app' => $all_app));
			$this->load->view('Footer_admin_v');
		}

		public function tambah_aplikasi(){
			$nama = $this->input->post('nama_app');
			$api_key = $this->input->post('api_key');

			$data_app = array(
								'nama_aplikasi' => $nama,
								'api_key' => $api_key
							);

			//menambahkan data aplikasi ke database
			$tambah = $this->Aplikasi_m->tambah_aplikasi($data_app);

			redirect('Aplikasi_admin');
		}

		public function update_aplikasi(){
			$id = $this->input->post('id_edit');
			$nama = $this->input->post('nama_app');
			$api_key = $this->input->post('api_key');

			//setId_aplikasi pada model Aplikasi_m
			$this->Aplikasi_m->setId_aplikasi($id);

			$data_app = array(
								'nama_aplikasi' => $nama,
								'api_key' => $api_key
							);

			//mengupdate data aplikasi pada database
			$update = $this->Aplikasi_m->update_aplikasi($data_app);

			redirect('Aplikasi_admin');
		}

		public function hapus_aplikasi(){
			$id = $this->input->post('id_hapus');

			//setId_aplikasi pada model Log_api_m
			$this->Log_api_m->setId_aplikasi($id);

			//cek_aplikasi pada tabel log_api
			$cek_aplikasi1 = $this->Log_api_m->cek_aplikasi();

			//menghapus aplikasi pada tabel log_api
			if($cek_aplikasi1->num_rows > 0){
				$hapus_aplikasi1 = $this->Log_api_m->hapus_aplikasi();
			}

			//setId_aplikasi pada model Api_akses_m
			$this->Api_akses_m->setId_aplikasi($id);

			//cek_aplikasi pada tabel api_akses
			$cek_aplikasi2 = $this->Api_akses_m->cek_aplikasi();

			//menghapus aplikasi pada tabel api_akses
			if($cek_aplikasi2->num_rows > 0){
				$hapus_aplikasi2 = $this->Api_akses_m->hapus_aplikasi();
			}

			//setId_aplikasi pada model User_app_m
			$this->User_app_m->setId_aplikasi($id);

			//cek_aplikasi pada tabel user_app
			$cek_aplikasi3 = $this->User_app_m->cek_aplikasi();

			//menghapus aplikasi pada tabel user_app
			if($cek_aplikasi3->num_rows > 0){
				$hapus_aplikasi3 = $this->User_app_m->hapus_aplikasi();
			}

			//setId_aplikasi pada model Aplikasi_m
			$this->Aplikasi_m->setId_aplikasi($id);

			//menghapus data aplikasi sesuai dengan id
			$hapus = $this->Aplikasi_m->hapus_aplikasi();

			redirect('Aplikasi_admin');
		}
	}
?>