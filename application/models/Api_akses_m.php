<?php
	/**
	* 
	*/
	class Api_akses_m extends CI_Model
	{
		private $id_api_akses;
		private $id_aplikasi;
		private $id_method;

		//setter
		public function setId_api_akses($id_api_akses){
			$this->id_api_akses = $id_api_akses;
		}

		public function setId_aplikasi($id_aplikasi){
			$this->id_aplikasi = $id_aplikasi;
		}

		public function setId_method($id_method){
			$this->id_method = $id_method;
		}

		//getter
		public function getId_api_akses(){
			return $this->id_api_akses;
		}

		public function getId_aplikasi(){
			return $this->id_aplikasi;
		}

		public function getId_method(){
			return $this->id_method;
		}

		//method lainnya
		public function get_all(){
			$this->db->order_by("id_aplikasi", "asc"); 
			$query = $this->db->get('api_akses');

			return $query;
		}

		public function cek_data(){
			$this->db->where('id_aplikasi', $this->getId_aplikasi());
			$this->db->where('id_method', $this->getId_method());
			$query = $this->db->get('api_akses');

			return $query;
		}

		public function tambah_api_akses($data){
			return $this->db->insert('api_akses', $data);
		}

		public function hapus_api_akses(){
			$this->db->where('id_api_akses', $this->getId_api_akses());
			$query = $this->db->delete('api_akses');

			return $query;
		}

		public function get_detail_akses(){
			$this->db->where('id_method', $this->getId_method());
			$query = $this->db->get('api_akses');
			return $query;
		}

		public function cek_method(){
			$this->db->where('id_method', $this->getId_method());
			$query = $this->db->get('api_akses');

			return $query;
		}

		public function hapus_method(){
			$this->db->where('id_method', $this->getId_method());
			$query = $this->db->delete('api_akses');

			return $query;
		}

		public function cek_aplikasi(){
			$this->db->where('id_aplikasi', $this->getId_aplikasi());
			$query = $this->db->get('api_akses');

			return $query;
		}

		public function hapus_aplikasi(){
			$this->db->where('id_aplikasi', $this->getId_aplikasi());
			$query = $this->db->delete('api_akses');

			return $query;
		}
	}
?>