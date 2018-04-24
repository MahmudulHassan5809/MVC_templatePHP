<?php
 /**
 * 
 */
 class Login extends Dcontroller 
 {
 	
 	function __construct()
 	{
 		 parent::__construct();
 	}
 	
 	public function Index()
 	{
 		$this->login();
 	} 
       

 	 public function login()
 	{
         Session::init();
         if (Session::get("userlogin")==true) {
         header("location:".BASE_URL."/Admin");	
         }
 		$this->load->view("login/login");
 	}

 	public function loginAuth()
 	{
 		$table="tbl_user";
 		$username=$_POST['username'];
 		$password=md5($_POST['password']);

 		$loginmodel=$this->load->model("Loginmodel");
 		$count=$loginmodel->userControll($table,$username,$password);
 		if ($count>0) {
 			 $result=$loginmodel->getUserData($table,$username,$password);
 			 Session::init();
 			 Session::set("userlogin",true);
 			 Session::set("username",$result[0]['username']);
 			 Session::set("userid",$result[0]['id']);
 			 header("location:".BASE_URL."/Admin");
 		}
 		else{
             header("location:".BASE_URL."/Login");
 		}

 	}

 	public function logout()
 	{
 		Session::init();
 		Session::destroy();
 		header("location:".BASE_URL."/Login");
 	}

 }


?>