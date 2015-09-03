<?php
	/**
	* 
	*/
	class Method_admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			//load model Method_api_m
			$this->load->model('Method_api_m');

			//load model Log_api_m
			$this->load->model('Log_api_m');

			//load model Api_akses_m
			$this->load->model('Api_akses_m');

			//array helper
			$this->load->helper('array');
		}

		public function index(){
			//mengambil data method
			$all_method = $this->Method_api_m->get_all();

			$this->load->view('Header_admin_v');
			$this->load->view('Method_admin_v', array('method' => $all_method));
			$this->load->view('Footer_admin_v');
		}

		public function tambah_method(){
			$nama = $this->input->post('nama_method');
			$param = $this->input->post('parameter');
			$method_req = $this->input->post('method_req');
			$output = $this->input->post('output');
			$desc = $this->input->post('deskripsi');

			$data_method = array(
									'nama_method' => $nama,
									'parameter' => $param,
									'method_request' => $method_req,
									'output' => $output,
									'deskripsi' => $desc
								);

			//menambahkan method ke database
			$tambah = $this->Method_api_m->tambah_method($data_method);

			redirect('Method_admin');
		}

		public function update_method(){
			$id = $this->input->post('id_edit');
			$nama = $this->input->post('nama_method');
			$param = $this->input->post('parameter');
			$output = $this->input->post('output');
			$desc = $this->input->post('deskripsi');

			//setId_method untuk model Method_api_m
			$this->Method_api_m->setId_method($id);

			$data_method = array(
									'nama_method' => $nama,
									'parameter' => $param,
									'output' => $output,
									'deskripsi' => $desc
								);

			//update data method
			$update = $this->Method_api_m->update_method($data_method);

			redirect('Method_admin');
		}

		public function hapus_method(){
			$id = $this->input->post('id_hapus');

			//setId_method untuk model Log_api_m
			$this->Log_api_m->setId_method($id);

			//cek_method pada model Log_api_m
			$cek_method1 = $this->Log_api_m->cek_method();

			//hapus id_method pada tabel log_api
			if($cek_method1->num_rows > 0){
				$hapus_cm1 = $this->Log_api_m->hapus_method();
			}

			//setId_method pada model Api_akses_m
			$this->Api_akses_m->setId_method($id);

			//cek method pada tabel api_akses
			$cek_method2 = $this->Api_akses_m->cek_method();

			//hapus id_method pada tabel api_akses
			if($cek_method2->num_rows > 0){
				$hapus_cm2 = $this->Api_akses_m->hapus_method();
			}

			//setId_method untuk model Method_api_m
			$this->Method_api_m->setId_method($id);

			//menghapus data method 
			$hapus = $this->Method_api_m->hapus_method();

			redirect('Method_admin');
		}
	}
?>