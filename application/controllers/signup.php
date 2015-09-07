<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

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
		header("Content-type: text/html; charset=utf-8");
		$data = array();
		$data['signup'] = true;

		if(empty($_POST)){
			$this->load->view('show/signup', $data);
			return true;
		}

		$account           = $aDb['account']           = @$_SESSION['account'];
		$user_name         = $aDb['user_name']         = $this->input->post('user_name', TRUE);
		$native_place      = $aDb['native_place']      = $this->input->post('native_place', TRUE);
		$birth_year        = $aDb['birth_year']        = $this->input->post('birth_year', TRUE);
		$birth_month       = $aDb['birth_month']       = $this->input->post('birth_month', TRUE);
		$birth_day         = $aDb['birth_day']         = $this->input->post('birth_day', TRUE);
		$id_code           = $aDb['id_code']           = $this->input->post('id_code', TRUE);
		$nationality       = $aDb['nationality']       = $this->input->post('nationality', TRUE);
		$occupation        = $aDb['occupation']        = $this->input->post('occupation', TRUE);
		$city              = $aDb['city']              = $this->input->post('city', TRUE);
		$email             = $aDb['email']             = $this->input->post('email', TRUE);
		$phone             = $aDb['phone']             = $this->input->post('phone', TRUE);
		$education         = $aDb['education']         = $this->input->post('education', TRUE);
		$game_account      = $aDb['game_account']      = $this->input->post('game_account', TRUE);
		$competition_event = $aDb['competition_event'] = $this->input->post('competition_event', TRUE);
		$intro             = $aDb['intro']             = $this->input->post('intro', TRUE);
		$stature           = $aDb['stature']           = $this->input->post('stature', TRUE);
		$weight            = $aDb['weight']            = $this->input->post('weight', TRUE);
		$shoe_size         = $aDb['shoe_size']         = $this->input->post('shoe_size', TRUE);
		$bust              = $aDb['bust']              = $this->input->post('bust', TRUE);
		$waistline         = $aDb['waistline']         = $this->input->post('waistline', TRUE);
		$hipline           = $aDb['hipline']           = $this->input->post('hipline', TRUE);
		$hobby             = @$this->input->post('hobby', TRUE);
		$skill             = @$this->input->post('skill', TRUE);

		$error = 0;
		$sMsg = '';

		if(empty($user_name)){
			$sMsg .= '用户名不能为空；';
			$error ++;
		}

		if(empty($native_place)){
			$sMsg .= '籍贯不能为空；';
			$error ++;
		}

		if(empty($birth_year) || empty($birth_month) || empty($birth_day)){
			$sMsg .= '出生日期不能为空；';
			$error ++;
		}else{
			$birth = $aDb['birth'] = $birth_year.'-'.$birth_month.'-'.$birth_day;
			unset($aDb['birth_year']);
			unset($aDb['birth_month']);
			unset($aDb['birth_day']);
		}

		if(empty($id_code)){
			$sMsg .= '身份证不能为空；';
			$error ++;
		}elseif(!IsCardNo($id_code)){
			$sMsg .= '身份证格式错误；';
			$error ++;
		}

		if(empty($nationality)){
			$sMsg .= '民族不能为空；';
			$error ++;
		}

		if(empty($occupation)){
			$sMsg .= '职业不能为空；';
			$error ++;
		}

		if(empty($city)){
			$sMsg .= '所在城市不能为空；';
			$error ++;
		}

		if(empty($email)){
			$sMsg .= '邮箱不能为空；';
			$error ++;
		}elseif(!IsMail($email)){
			$sMsg .= '邮箱格式错误；';
			$error ++;
		}

		if(empty($phone)){
			$sMsg .= '电话不能为空；';
			$error ++;
		}elseif(!IsMobile($phone)){
			$sMsg .= '电话格式错误；';
			$error ++;
		}

		if(empty($education)){
			$sMsg .= '学历不能为空；';
			$error ++;
		}

		if(empty($game_account)){
			$sMsg .= '游戏账号不能为空；';
			$error ++;
		}

		if(empty($competition_event)){
			$sMsg .= '参赛项目不能为空；';
			$error ++;
		}

		if(empty($intro)){
			$sMsg .= '自我介绍不能为空；';
			$error ++;
		}elseif(countChinese($intro) > 100){
			$sMsg .= '自我介绍限100字；';
			$error ++;
		}

		if(empty($stature)){
			$sMsg .= '身高不能为空；';
			$error ++;
		}elseif(!is_numeric($stature)){
			$sMsg .= '身高必须为数字；';
			$error ++;
		}

		if(empty($weight)){
			$sMsg .= '体重不能为空；';
			$error ++;
		}elseif(!is_numeric($weight)){
			$sMsg .= '体重必须为数字；';
			$error ++;
		}

		if(empty($shoe_size)){
			$sMsg .= '鞋码不能为空；';
			$error ++;
		}elseif(!is_numeric($shoe_size)){
			$sMsg .= '鞋码必须为数字；';
			$error ++;
		}

		if(empty($bust)){
			$sMsg .= '胸围不能为空；';
			$error ++;
		}elseif(!is_numeric($bust)){
			$sMsg .= '胸围必须为数字；';
			$error ++;
		}

		if(empty($waistline)){
			$sMsg .= '腰围不能为空；';
			$error ++;
		}elseif(!is_numeric($waistline)){
			$sMsg .= '腰围必须为数字；';
			$error ++;
		}

		if(empty($hipline)){
			$sMsg .= '臀围不能为空；';
			$error ++;
		}elseif(!is_numeric($hipline)){
			$sMsg .= '臀围必须为数字；';
			$error ++;
		}

		if(empty($hobby)){
			$sMsg .= '兴趣爱好必填一项；';
			$error ++;
		}else{
			$aDb['hobby'] = json_encode($hobby, JSON_UNESCAPED_UNICODE);
		}

		if(empty($skill)){
			$sMsg .= '具备才艺必填一项；';
			$error ++;
		}else{
			$aDb['skill'] = json_encode($skill, JSON_UNESCAPED_UNICODE);
		}

		if($error > 0){
			$aDb['msg'] = $sMsg;
			$this->load->view('show/signup', $aDb);
			return false;
		}

		$ip = $aDb['ip'] = getRealIp();

		if(isset($this->input->post('add_btn'))){
			$rel = $this->Ori_model->mAdd($aDb);

			if($rel){
				$this->detail($rel);
			}else{
				$sMsg .= '报名失败，请稍候重试；';
				$this->load->view('show/signup', $aDb);
				return false;
			}
		}elseif(isset($this->input->post('edit_btn'))){
			/*
			$rel = $this->Ori_model->mUpdateByArray($aDb);

			if($rel){
				$this->detail($rel);
			}else{
				$sMsg .= '修改失败，请稍候重试；';
				$this->load->view('show/signup', $aDb);
				return false;
			}
			*/
		}
	}

	public function detail($id=1){
		header("Content-type: text/html; charset=utf-8");
		$data = array();
		$data['detail'] = true;

		$rel = $this->Ori_model->mGet($id);
		var_dump($rel[0]);
		// $this->load->view('show/detail', $data);
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */