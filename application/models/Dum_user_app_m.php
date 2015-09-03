<?php
	/**
	* 
	*/
	class Dum_user_app_m extends CI_Model
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
			return $this->db->insert('dum_user_app', $user_app);
		}

		public function get_all(){
			return $this->db->get('dum_user_app');
		}

		public function delete_row_dum(){
			$this->db->where('id', $this->getId());
			$query = $this->db->delete('dum_user_app');

			return $query;
		}
	}
?>