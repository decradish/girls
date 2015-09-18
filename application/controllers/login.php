<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->helper('cookie');
	}

	public function index(){
		header("Content-type: text/json; charset=utf-8");
		$error = 0;
		$aCurl = array();
		$data = array();
		$data['error'] = '';

		$username  = $aCurl['username']  = $this->input->post('username', TRUE);
		$password = $aCurl['password'] = $this->input->post('password', TRUE);

		if(empty($username)){
			$data['error'] .= '账号不能为空；';
			$error ++;
		}

		if(empty($password)){
			$data['error'] .= '密码不能为空；';
			$error ++;
		}

		if($error > 0){
			$data['code'] = 0;
			die(json_encode($data));
		}

		$signature = $aCurl['signature'] = md5($username.$password.SECRET_KEY);
		$rel = my_curl(OW_URL.'user/login_api/', $aCurl);
		$aRel = json_decode($rel, true);
		if(!empty($aRel['id']) && !empty($aRel['username'])){
			$this->set_cookie($aRel['id'], $aRel['username']);
		}
		die(json_encode($rel));
	}

	public function signup_ezone(){
		header("Content-type: text/json; charset=utf-8");
		$error = 0;
		$aCurl = array();
		$data = array();
		$data['error'] = '';

		$username   = $aCurl['username']   = $this->input->post('username', TRUE);
		$password   = $aCurl['password']   = $this->input->post('password', TRUE);
		$repassword = $aCurl['repassword'] = $this->input->post('repassword', TRUE);
		$realname   = $aCurl['realname']   = $this->input->post('realname', TRUE);
		$id_no      = $aCurl['id_no']      = $this->input->post('id_no', TRUE);
		$phone      = $aCurl['phone']      = $this->input->post('phone', TRUE);

		if(empty($username)){
			$data['error'] .= '账号不能为空；';
			$error ++;
		}

		if(empty($password)){
			$data['error'] .= '密码不能为空；';
			$error ++;
		}

		if(empty($repassword)){
			$data['error'] .= '重复密码不能为空；';
			$error ++;
		}elseif($password != $repassword){
			$data['error'] .= '两次密码不一致；';
			$error ++;
		}
		/*
		if(empty($realname)){
			$data['error'] .= '真实姓名不能为空；';
			$error ++;
		}

		if(empty($id_no)){
			$data['error'] .= '身份证号不能为空；';
			$error ++;
		}elseif(!IsCardNo($id_no)){
			$data['error'] .= '身份证格式错误；';
			$error ++;
		}

		if(empty($phone)){
			$data['error'] .= '电话不能为空；';
			$error ++;
		}elseif(!IsMobile($phone)){
			$data['error'] .= '电话格式错误；';
			$error ++;
		}
		*/

		if($error > 0){
			$data['code'] = 0;
			die(json_encode($data));
		}

		$signature = $aCurl['signature'] = md5($username.$password.$phone.SECRET_KEY);
		$rel = my_curl(OW_URL.'user/member_api/', $aCurl);
		$aRel = json_decode($rel, true);
		if(!empty($aRel['id']) && !empty($aRel['username'])){
			$this->set_cookie($aRel['id'], $aRel['username']);
		}
		die(json_encode($rel));
	}

	public function set_cookie($id, $username, $auot_login=true){
		$cookie = $id.'##'.$username.'##'.md5($id.$username.SECRET_KEY);
		$cookie = base64_encode($cookie);
		$now = time();

		if($auot_login){
			setcookie('ezone',$cookie,$now+3600*24*30,"/",COOKIE_DOMAIN,null,TRUE);
		}else{
			setcookie('ezone',$cookie,null,"/",COOKIE_DOMAIN,null,TRUE);
		}

	}


	public function logout(){
	
		delete_cookie('ezone');
		setcookie('ezone','',-3600*24*30,"/",COOKIE_DOMAIN,null,TRUE);
		setcookie('ezone','',-3600*24*30,"/",COOKIE_DOMAIN,null,TRUE);
		
		redirect("signup");
		

	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */