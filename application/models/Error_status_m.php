<?php
	class Error_status_m extends CI_Model{
		//atribut
		private $id_error;
		private $status;
		
		//setter dan getter
		public function setId_error($id_error){
			$this->id_error = $id_error;
		}
		
		public function setStatus($status){
			$this->status = $status;
		}
		
		public function getId_error(){
			return $this->id_error;
		}
		
		public function getStatus(){
			return $this->status;
		}
		
		//method lainnya
		public function get_all(){
			return $this->db->get('error_status');
		}

		public function cek_id(){
			$this->db->where('id_error', $this->getId_error());
			$query = $this->db->get('error_status');

			return $query;
		}

		public function tambah_request_status($req_stts){
			return $this->db->insert('error_status', $req_stts);
		}

		public function update_request_status($req_stts){
			$this->db->where('id_error', $this->getId_error());
			$query = $this->db->update('error_status', $req_stts);

			return $query;
		}

		public function hapus_request_status(){
			$this->db->where('id_error', $this->getId_error());
			$query = $this->db->delete('error_status');

			return $query;
		}
	}
?>