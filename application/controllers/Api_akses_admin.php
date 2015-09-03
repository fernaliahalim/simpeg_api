<?php
	/**
	* 
	*/
	class Api_akses_admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			//Array helper
			$this->load->helper('array');

			//load model User_app_m
			$this->load->model('Api_akses_m');

			//load model Aplikasi_m
			$this->load->model('Aplikasi_m');

			//load model Method_api_m
			$this->load->model('Method_api_m');
		}

		public function index(){
			//mengambil semua data api akses
			$api_akses = $this->Api_akses_m->get_all();

			foreach ($api_akses->result() as $api_akses_db) {
				$id_aplikasi[] = $api_akses_db->id_aplikasi;
				$id_method[] = $api_akses_db->id_method;
			}

			for($i=0; $i<$api_akses->num_rows; $i++){
				//setId_aplikasi pada model Aplikasi_m
				$this->Aplikasi_m->setId_aplikasi($id_aplikasi[$i]);
				$detail_app = $this->Aplikasi_m->get_detail_aplikasi();

				foreach ($detail_app->result() as $det_apps) {
					$nama_app[] = $det_apps->nama_aplikasi;
				}
			}

			for($j=0; $j<$api_akses->num_rows; $j++){
				//setId_method pada model Method_api_m
				$this->Method_api_m->setId_method($id_method[$j]);
				$detail_method = $this->Method_api_m->get_detail_method();

				foreach ($detail_method->result() as $det_method) {
					$nama_method[] = $det_method->nama_method;
				}
			}

			//mengambil data aplikasi
			$all_app = $this->Aplikasi_m->get_all();

			//mengambil data method
			$all_method = $this->Method_api_m->get_all();

			$error = '';

			$this->load->view('Header_admin_v');
			$this->load->view('Api_akses_admin_v', array('api_akses' => $api_akses, 'nama_app' => $nama_app, 'nama_method' => $nama_method, 'all_app' => $all_app, 'all_method' => $all_method, 'error' => $error));
			$this->load->view('Footer_admin_v');
		}

		public function tambah_api_akses(){
			$id_aplikasi = $this->input->post('jenis_app');
			$id_method = $this->input->post('jenis_method');

			$error = '';

			//setId_aplikasi pada model Api_akses_m
			$this->Api_akses_m->setId_aplikasi($id_aplikasi);

			//setId_method pada model Api_akses_m
			$this->Api_akses_m->setId_method($id_method);

			//cek data
			$cek_data = $this->Api_akses_m->cek_data();

			$data = array(
							'id_aplikasi' => $id_aplikasi,
							'id_method' => $id_method
						);

			if(!($cek_data->num_rows > 0)){
				$tambah = $this->Api_akses_m->tambah_api_akses($data);
			}
			else{
				$error = 'Data yang dimasukkan sudah ada';
			}

			//mengambil semua data api akses
			$api_akses = $this->Api_akses_m->get_all();

			foreach ($api_akses->result() as $api_akses_db) {
				$id_aplikasi_db[] = $api_akses_db->id_aplikasi;
				$id_method_db[] = $api_akses_db->id_method;
			}

			for($i=0; $i<$api_akses->num_rows; $i++){
				//setId_aplikasi pada model Aplikasi_m
				$this->Aplikasi_m->setId_aplikasi($id_aplikasi_db[$i]);
				$detail_app = $this->Aplikasi_m->get_detail_aplikasi();

				foreach ($detail_app->result() as $det_apps) {
					$nama_app[] = $det_apps->nama_aplikasi;
				}
			}

			for($j=0; $j<$api_akses->num_rows; $j++){
				//setId_method pada model Method_api_m
				$this->Method_api_m->setId_method($id_method_db[$j]);
				$detail_method = $this->Method_api_m->get_detail_method();

				foreach ($detail_method->result() as $det_method) {
					$nama_method[] = $det_method->nama_method;
				}
			}

			//mengambil data aplikasi
			$all_app = $this->Aplikasi_m->get_all();

			//mengambil data method
			$all_method = $this->Method_api_m->get_all();

			$this->load->view('Header_admin_v');
			$this->load->view('Api_akses_admin_v', array('api_akses' => $api_akses, 'nama_app' => $nama_app, 'nama_method' => $nama_method, 'all_app' => $all_app, 'all_method' => $all_method, 'error' => $error));
			$this->load->view('Footer_admin_v');
		}

		public function hapus_api_akses(){
			$id = $this->input->post('id_hapus');

			//setId_api_akses pada model Api_akses_m
			$this->Api_akses_m->setId_api_akses($id);

			//hapus data api_akses berdasarkan id
			$hapus = $this->Api_akses_m->hapus_api_akses();

			redirect('Api_akses_admin');
		}
	}
?>