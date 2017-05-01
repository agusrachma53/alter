<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {
   function __construct(){
		parent::__construct();
	}


	public function index()
	{
		$this->load->view('user/v_home');
	}

    public function artikel(){
        $this->load->view('user/v_artikel');
    }
    public function tentang(){
        $this->load->view('user/v_tentang');
    }
    public function kontak(){
        $this->load->view('user/v_kontak');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
