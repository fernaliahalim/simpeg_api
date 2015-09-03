<?PHP
	/**
	* 
	*/
	class Permohonan_rest extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			
			//load model Error_status_m
			$this->load->model('Error_status_m');
		}

		public function index(){
			//mengambil semua data error_status
			$all_data = $this->Error_status_m->get_all();
			
			$this->load->view('Header_v');
			$this->load->view('Permohonan_rest_v', array('all_data' => $all_data));
			$this->load->view('Footer_v');
		}
	}
?>