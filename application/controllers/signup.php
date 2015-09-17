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
		$data['girl_count'] = $this->Ori_model->mCountAll();
		$aDb = array();
		$error = 0;
		$sMsg = '';

		$rel = check_login();
		if(!$rel){
			$data['login'] = $aDb['login'] = false;
			$error ++;
		}

		if(empty($_POST)){
			$rel = $this->Ori_model->mGetBy('ezone_id', @$_SESSION['id']);

			if(count($rel) > 0){
				$data = array_merge($data, $rel[0]);
				$data['signuped'] = true;
			}

			$this->load->view('show/signup', $data);
			return true;
		}

		$ezone_id          = $aDb['ezone_id']          = @$_SESSION['id'];
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
		$img               = @$this->input->post('image_src', TRUE);
		$leader_img        = $this->input->post('leader_img', TRUE);

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

		if(empty($img) || count($img) < 5){
			$sMsg .= '必须上传五张照片；';
			$error ++;
		}elseif (!isset($leader_img) && (int)$leader_img > 5) {
			$sMsg .= '首图不能为空；';
			$error ++;
		}else{
			$image = array();
			$image['src'] = json_encode($img);
			$image['leader_img'] = $leader_img;
			$aDb['image'] = json_encode($image);
		}

		if($error > 0){
			$aDb['msg'] = $sMsg;
			$this->load->view('show/signup', $aDb);
			return false;
		}

		$ip = $aDb['ip'] = getRealIp();
		$ezone_id = $aDb['ezone_id'] = $_SESSION['id'];

		if(isset($_POST['add_btn'])){
			$rel = $this->Ori_model->mGetBy('ezone_id', $ezone_id);
			if(count($rel) > 0){
				$aDb['msg'] = '您已报名，请勿重复报名';
				$this->load->view('show/signup', $aDb);
				return false;
			}

			$rel = $this->Ori_model->mAdd($aDb);

			if($rel){
				redirect('/player/index/'.$ezone_id);
			}else{
				$sMsg .= '报名失败，请稍候重试；';
				$this->load->view('show/signup', $aDb);
				return false;
			}
		}elseif(isset($_POST['edit_btn'])){
			$rel = $this->Ori_model->mUpdateBy('ezone_id', $ezone_id, $aDb);

			if($rel){
				redirect('/player/index/'.$ezone_id);
			}else{
				$sMsg .= '修改失败，请稍候重试；';
				$this->load->view('show/signup', $aDb);
				return false;
			}
		}
	}

	public function detail($ezone_id=1){
		header("Content-type: text/html; charset=utf-8");
		$data = array();
		$data['girl_count'] = $this->Ori_model->mCountAll();
		$data['detail'] = true;

		$rel = $this->Ori_model->mGetBy('ezone_id', $ezone_id);
		$this->load->view('show/detail', $data);
	}

	public function upload_img(){
		$max_width = 600;
		$max_height = 600;
		$aJson = array();

		$config['upload_path']   = './uploads/';
        $config['allowed_types'] =' gif|jpg|png|jpeg';
        $config['max_size']      = '10000';
        $config['file_name']     = md5(uniqid().mt_rand(1,1000000)); //文件名不使用原始名
        $this->load->library('upload',$config);

        if($this->upload->do_upload('image')){
            $data = $this->upload->data();
            $aJson['url'] = '//'.$_SERVER['SERVER_NAME'].'/uploads/'.$data['file_name'];

            if($data['image_width'] > $max_width || $data['image_height'] > $max_height ){
				if($data['image_width'] > $max_width){
					$max_height = ($max_width*$data['image_height'])/$data['image_width'];
				}
				if($data['image_height'] > $max_height){
					$max_width = ($max_height*$data['image_width'])/$data['image_height'];
				}

				$configResize = array(
					'image_library'  => 'gd2',
					'source_image'   => './uploads/'.$data['file_name'],
					'width'          => $max_width,
					'height'         => $max_height,
					'create_thumb'   => TRUE,
					'maintain_ratio' => TRUE
				);

				$this->load->library('image_lib',$configResize);
				$this->image_lib->resize();

	            $aJson['url'] = '//'.$_SERVER['SERVER_NAME'].'/uploads/'.$data['raw_name'].'_thumb'.$data['file_ext'];
            }
			// header("Content-type: text/json;");
            die(json_encode($aJson));

        }
        else{
            $aJson['error'] = array('error' => $this->upload->display_errors());
			// header("Content-type: text/json;");
            die(json_encode($aJson));
        }
	}

	public function resize_img(){
		$x = $this->input->post('x', true);
		$y = $this->input->post('y', true);
		$w = $this->input->post('w', true);
		$h = $this->input->post('h', true);
		$target = str_replace('//'.$_SERVER['HTTP_HOST'], '.', $this->input->post('img', true));//$_SERVER['HTTP_HOST']
		$aJson = array();

		$config['x_axis'] = $x; //据图像左上角x轴距离
		$config['y_axis'] = $y; //据图像左上角y轴距离
		$config['width']  = $w; //裁剪的宽度
		$config['height'] = $h; //裁剪的长度
		$config['image_library'] = 'gd2';
		$config['maintain_ratio'] = FALSE;
		$config['source_image'] = $target;
		// $config['create_thumb'] = TRUE;
		// $config['encrypt_name'] = true;

		$this->load->library('image_lib',$config);
		$rel = $this->image_lib->crop();

		$aJson['status'] = $rel;
        die(json_encode($aJson));
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */