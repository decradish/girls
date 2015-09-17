<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

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
		$data['is_home'] = true;

		$data['girl_count'] = $this->Ori_model->mCountAll();

		$data['news'] = $this->Ori_model->mPngGetBy('game', 1, 2, 0, 'desc', 'news');

		$aGoddess = $data['goddess'] = json_decode(GODDESS, true);
		$aGirls = array();
		foreach ($aGoddess as $key => $value) {
			$rel = $this->Ori_model->mPngGetBy('competition_event', $value, 4);
			if(!empty($rel)){
				$aGirls[$key] = $rel;
			}
		}
		$data['girls'] = $aGirls;

		$this->load->view('show/index', $data);
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */