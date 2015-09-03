<?PHP
	/**
	* 
	*/
	class Method_api extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			//load model Method_api_m
			$this->load->model('Method_api_m');

			//load model Aplikasi_m
			$this->load->model('Aplikasi_m');

			//load model Api_akses_m
			$this->load->model('Api_akses_m');
		}

		public function index(){
			//mengambil data method
			$all_method = $this->Method_api_m->get_all();

			$this->load->view('Header_v');
			$this->load->view('List_Method_v', array('all_method' => $all_method));
			$this->load->view('Footer_v');
		}

		public function list_method(){
			//mengambil data method
			$all_method = $this->Method_api_m->get_all();

			$val = $this->uri->segment(3);;

			$this->load->view('Header_v');
			$this->load->view('List_detail_method_v', array('all_method' => $all_method, 'val' => $val));
			$this->load->view('Footer_v');
		}

		public function detail(){
			$id = $this->uri->segment(3);

			$this->Method_api_m->setId_method($id);

			$this->Api_akses_m->setId_method($id);

			//mengambil data detail method
			$detail_method = $this->Method_api_m->get_detail_method();

			//mengamil data detail akses method dan aplikasi
			$detail_akses = $this->Api_akses_m->get_detail_akses();
			foreach($detail_akses->result() as $da){
				$idm[] = $da->id_aplikasi; 
			}

			//mengambil data detail aplikasi
			for($i=0; $i<$detail_akses->num_rows; $i++){
				$this->Aplikasi_m->setId_aplikasi($idm[$i]);
				$detail_aplikasi = $this->Aplikasi_m->get_detail_aplikasi();
				foreach($detail_aplikasi->result() as $dp){
					$nama_aplikasi_db[] = $dp->nama_aplikasi;
				}
			}

			$this->load->view('Header_v');
			$this->load->view('Detail_method_v', array('detail_method' => $detail_method, 'detail_akses' => $detail_akses, 'nama_aplikasi' => $nama_aplikasi_db));
			$this->load->view('Footer_v');
		}
	}
?>