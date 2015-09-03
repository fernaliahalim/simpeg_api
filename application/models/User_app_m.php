<?php
	/**
	* 
	*/
	class User_app_m extends CI_Model
	{
		//atribut
		private $id;
		private $id_user;
		private $id_aplikasi;

		//setter
		public function setId($id){
			$this->id = $id;
		}

		public function setId_user($id_user){
			$this->id_user = $id_user;
		}

		public function setId_aplikasi($id_aplikasi){
			$this->id_aplikasi =$id_aplikasi;
		}

		//getter
		public function getId(){
			return $this->id;
		}

		public function getId_user(){
			return $this->id_user;
		}

		public function getId_aplikasi(){
			return $this->id_aplikasi;
		}

		//method lainnya
		public function tambah_user_app($user_app){
			return $this->db->insert('user_app', $user_app);
		}

		public function get_aplikasi_by_user(){
			$this->db->where('id_user', $this->getId_user());
			$query = $this->db->get('user_app');

			return $query;
		}

		public function cek(){
			$this->db->where('id_user', $this->getId_user());
			$this->db->where('id_aplikasi', $this->getId_aplikasi());
			$query = $this->db->get('user_app');

			return $query;
		}

		public function cek_aplikasi(){
			$this->db->where('id_aplikasi', $this->getId_aplikasi());
			$query = $this->db->get('user_app');

			return $query;
		}

		public function hapus_aplikasi(){
			$this->db->where('id_aplikasi', $this->getId_aplikasi());
			$query = $this->db->delete('user_app');

			return $query;
		}
	}
?>