<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

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

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$data = array();
		$data['girl_count'] = $this->Ori_model->mCountAll();

		$rel = $this->Ori_model->mGetBy('game', 1, 'news');
		$data['news'] = $rel;

		$this->load->view('show/news', $data);
	}

	public function detail($id=null){
		$data = array();
		$data['girl_count'] = $this->Ori_model->mCountAll();

		$rel = $this->Ori_model->mGet((int)$id, 'news');
		$data['post'] = $rel[0];

		$this->load->view('show/news', $data);
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */