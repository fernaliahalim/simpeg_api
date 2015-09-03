<?php
	/**
	* 
	*/
	class User_m extends CI_Model
	{
		//atribut
		private $id_user;
		private $nama;
		private $username;
		private $password;
		private $email;
		private $no_telp;
		private $flag;

		//setter
		public function setId_user($id_user){
			$this->id_user = $id_user;
		}

		public function setNama($nama){
			$this->nama = $nama;
		}

		public function setUsername($username){
			$this->username = $username;
		}

		public function setPassword($password){
			$this->password = $password;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function setNo_telp($no_telp){
			$this->no_telp = $no_telp;
		}

		public function setFlag($flag){
			$this->flag = $flag;
		}

		//getter
		public function getId_user(){
			return $this->id_user;
		}

		public function getNama(){
			return $this->nama;
		}

		public function getUsername(){
			return $this->username;
		}

		public function getPassword(){
			return $this->password;
		}

		public function getEmail(){
			return $this->email;
		}

		public function getNo_telp(){
			return $this->no_telp;
		}

		public function getFlag(){
			return $this->flag;
		}

		//method lainnya
		public function daftar_user($user){
			return $this->db->insert('user', $user);
		}

		public function get_max_id(){
			$this->db->select_max('id_user', 'id');
			$query = $this->db->get('user');

			return $query;
		}

		public function search_user(){
			$this->db->where('username', $this->getUsername());
			$query = $this->db->get('user');

			return $query;
		}

		public function cek_email(){
			$this->db->where('email', $this->getEmail());
			$query = $this->db->get('user');

			return $query;
		}

		public function cek_password(){
			$this->db->where('id_user', $this->getId_user());
			$query = $this->db->get('user');

			return $query;
		}

		public function get_user(){
			$this->db->where('username', $this->getUsername());
			$this->db->where('password', md5($this->getPassword()));
			$this->db->where('flag', $this->getFlag());
			$query = $this->db->get('user');

			return $query;
		}

		public function get_user_by_id(){
			$this->db->where('id_user', $this->getId_user());
			$query = $this->db->get('user');

			return $query;
		}

		public function ubah_user($data){
			$this->db->where('id_user', $this->getId_user());
			$query = $this->db->update('user', $data);

			return $query;
		}
	}
?>