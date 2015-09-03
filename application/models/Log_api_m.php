<?php
	/**
	* 
	*/
	class Log_api_m extends CI_Model
	{
		//atribut
		private $id_log;
		private $id_aplikasi;
		private $id_method;
		private $date_time;

		//setter
		public function setId_log($id_log){
			$this->id_log = $id_log;
		}

		public function setId_aplikasi($id_aplikasi){
			$this->id_aplikasi = $id_aplikasi;
		}

		public function setId_method($id_method){
			$this->id_method = $id_method;
		}

		public function setDate_time($date_time){
			$this->date_time = $date_time;
		}

		//getter
		public function getId_log(){
			return $this->id_log;
		}

		public function getId_aplikasi(){
			return $this->id_aplikasi;
		}

		public function getId_method(){
			return $this->id_method;
		}

		public function getDate_time(){
			return $this->date_time;
		}

		//fungsi lainnya
		public function cek_method(){
			$this->db->where('id_method', $this->getId_method());
			$query = $this->db->get('log_api');

			return $query;
		}

		public function hapus_method(){
			$this->db->where('id_method', $this->getId_method());
			$query = $this->db->delete('log_api');

			return $query;
		}

		public function cek_aplikasi(){
			$this->db->where('id_aplikasi', $this->getId_aplikasi());
			$query = $this->db->get('log_api');

			return $query;
		}

		public function hapus_aplikasi(){
			$this->db->where('id_aplikasi', $this->getId_aplikasi());
			$query = $this->db->delete('log_api');

			return $query;
		}
	}
?>