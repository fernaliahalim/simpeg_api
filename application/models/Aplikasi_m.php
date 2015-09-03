<?php
	/**
	* 
	*/
	class Aplikasi_m extends CI_Model
	{
		//atribut
		private $id_aplikasi;
		private $nama_aplikasi;
		private $api_key;

		//setter
		public function setId_aplikasi($id_aplikasi){
			$this->id_aplikasi = $id_aplikasi;
		}

		public function setNama_aplikasi($nama_aplikasi){
			$this->nama_aplikasi = $nama_aplikasi;
		}

		public function setApi_key($api_key){
			$this->api_key = $api_key;
		}

		//getter
		public function getId_aplikasi(){
			return $this->id_aplikasi;
		}

		public function getNama_aplikasi(){
			return $this->nama_aplikasi;
		}

		public function getApi_key(){
			return $this->api_key;
		}

		//method lainnya
		public function get_all(){
			$query = $this->db->get('aplikasi');
			return $query;
		}

		public function get_detail_aplikasi(){
			$this->db->where('id_aplikasi', $this->getId_aplikasi());
			$query = $this->db->get('aplikasi');
			return $query;
		}

		public function get_another_app(){
			$this->db->where('id_aplikasi !=', $this->getId_aplikasi());
			$query = $this->db->get('aplikasi');
			return $query;
		}

		public function get_row(){
			return $this->db->count_all('aplikasi');
		}

		public function tambah_aplikasi($data_app){
			return $this->db->insert('aplikasi', $data_app);
		}

		public function update_aplikasi($data_app){
			$this->db->where('id_aplikasi', $this->getId_aplikasi());
			$query = $this->db->update('aplikasi', $data_app);

			return $query;
		}

		public function hapus_aplikasi(){
			$this->db->where('id_aplikasi', $this->getId_aplikasi());
			$query = $this->db->delete('aplikasi');

			return $query;
		}
	}
?>