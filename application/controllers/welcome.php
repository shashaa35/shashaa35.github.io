<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	function __Construct() {
	parent::__Construct();
	$this->load->model('songs_model');

	$this->load->helper('form', 'url');
	}
	public function index()
	{
		$data['links']=$this->songs_model->get_songs();
		
		 $this->load->view('index.php',$data);
	}
	public function add()
	{
		 $name=$_REQUEST['name'];
		 $link=$_REQUEST['link'];
		 // echo "string";
		 $this->songs_model->add_song($name,$link);
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */