<?php
	/**
	* 
	*/
	class Request_status_admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			//load model Error_status_m
			$this->load->model('Error_status_m');
		}

		public function index(){
			//mengambil semua data error status
			$data = $this->Error_status_m->get_all();

			$error = '';

			$this->load->view('Header_admin_v');
			$this->load->view('Request_status_admin_v', array('data' => $data, 'error' => $error));
			$this->load->view('Footer_admin_v');
		}

		public function tambah_request_status(){
			$id = $this->input->post('id_status');
			$stts = $this->input->post('status');

			//setId_error pada model Error_status_m
			$this->Error_status_m->setId_error($id);

			//cek id_status pada tabel error_status
			$cek_id = $this->Error_status_m->cek_id();

			if($cek_id->num_rows > 0){
				//mengambil semua data error status
				$data = $this->Error_status_m->get_all();

				$error = 'ID Status yang dimasukkan sudah ada';

				$this->load->view('Header_admin_v');
				$this->load->view('Request_status_admin_v', array('data' => $data, 'error' => $error));
				$this->load->view('Footer_admin_v');
			}
			else{
				$req_stts = array(
									"id_error" => $id,
									"status" => $stts
									);

				//menambahkan data ke tabel
				$tambah = $this->Error_status_m->tambah_request_status($req_stts);

				redirect('Request_status_admin');
			}
		}

		public function update_request_status(){
			$id = $this->input->post('id_edit');
			$stts = $this->input->post('status_edit');

			//setId_error pada model Error_status_m
			$this->Error_status_m->setId_error($id);

			$req_stts = array(
								'status' => $stts
								);

			//update data status pada tabel error_status
			$update = $this->Error_status_m->update_request_status($req_stts);

			redirect('Request_status_admin');
		}

		public function hapus_request_status(){
			$id = $this->input->post('id_hapus');

			//setId_error pada model Error_status_m
			$this->Error_status_m->setId_error($id);

			//hapus data di tabel error_status
			$hapus = $this->Error_status_m->hapus_request_status();

			redirect('Request_status_admin');
		}
	}
?>