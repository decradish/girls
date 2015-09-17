<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Player extends CI_Controller {

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

	public function index($ezone_id=null){
		$data = array();
		$data['girl_count'] = $this->Ori_model->mCountAll();

		if(!empty($_GET)){
			$search_item = $this->input->get('search_item', true);
			$search_val = $this->input->get('girl_search_val', true);

			$rel = $this->Ori_model->mSearch($search_item, $search_val);
			$data['girls'] = $rel;
			$this->load->view('show/player', $data);
			return true;
		}

		if(!$ezone_id){
			$data['girls'] = $this->Ori_model->mGetAll(100);
			$this->load->view('show/player', $data);
			return true;
		}

		$rel = $this->Ori_model->mGetBy('ezone_id', $ezone_id);
		if(count($rel) > 0){
			$data = $rel[0];
		}
		$this->load->view('show/detail', $data);
	}

	/*
	public function delete($ezone_id=null){
		$data = array();

		$rel = $this->Ori_model->mDeleteBy('ezone_id', $ezone_id);
		var_dump($rel);
	}
	*/
}

/* End of file player.php */
/* Location: ./application/controllers/player.php */