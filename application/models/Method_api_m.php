<?PHP
	/**
	* 
	*/
	class Method_api_m extends CI_Model
	{
		//atibut
		private $id_method;
		private $nama_method;
		private $parameter;
		private $output;

		//setter
		public function setId_method($id_method){
			$this->id_method = $id_method;
		}

		public function setNama_method($nama_method){
			$this->nama_method = $nama_method;
		}

		public function setParameter($parameter){
			$this->parameter = $parameter;
		}

		public function setOutput($output){
			$this->output = $output;
		}

		//getter
		public function getId_method(){
			return $this->id_method;
		}

		public function getNama_method(){
			return $this->nama_method;
		}

		public function getParameter(){
			return $this->parameter;
		}

		public function getOutput(){
			return $this->output;
		}

		//method fungsi yang lain
		public function get_all(){
			$this->db->order_by('nama_method', 'asc'); 
			$query = $this->db->get('method');			
			return $query;
		}

		public function get_detail_method(){
			$this->db->where('id_method', $this->getId_method());
			$query = $this->db->get('method');
			return $query;
		}

		public function tambah_method($data){
			return $this->db->insert('method', $data);
		}

		public function update_method($data){
			$this->db->where('id_method', $this->getId_method());
			$query = $this->db->update('method', $data); 

			return $query;
		}

		public function hapus_method(){
			$this->db->where('id_method', $this->getId_method());
			$query = $this->db->delete('method'); 

			return $query;
		}
	}
?>