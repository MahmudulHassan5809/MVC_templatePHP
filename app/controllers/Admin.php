<?php
 /**
 * 
 */
 class Admin extends Dcontroller 
 {
 	
 	function __construct()
 	{
 		 parent::__construct();
 		 Session::checkSession();
 	}
 	public function Index()
 	{
 		$this->home();
 	}
 	public function home()
 	{
 		
 		$this->load->view('admin/header');
 		$this->load->view('admin/sidebar');
        
        $data['user']=array(
              "username" =>Session::get("username")
        );

 		$this->load->view('admin/home',$data);
 		$this->load->view('admin/footer');
 	}

 	public function addCategory()
 	{
 		$this->load->view('admin/header');
 		$this->load->view('admin/sidebar');
 		$this->load->view('admin/addcat');
 		$this->load->view('admin/footer');
 		
 	}

  public function category()
 	{
 		$this->load->view('admin/header');
 		$this->load->view('admin/sidebar');

 	   $data=array();
 	   $table="category";	
       $catModel=$this->load->model("CatModel");
       $data['cat']=$catModel->catList($table);
       $this->load->view("admin/category",$data);

      $this->load->view('admin/footer');
 	}
 		public function insertCatagory()
 	{
 	   $table="category";
 	   $cName=$_POST['cName'];
 	   $title=$_POST['title'];
 	   $data= array(
 	   	'cName' =>$cName , 
        'title' => $title 
 	   	);	

 	  $catModel=$this->load->model("CatModel");
 	  $result= $catModel->insertCat($table,$data);
 	  $mdata=array();
 	  if ($result==1) {
 	  	 $mdata['msg']="Category Added Successfully";
 	  }
 	  else
 	  {
 	  	$mdata['msg']="Category Not Added Successfully";
 	  }
 	   $url=BASE_URL."/Admin/category?msg=".urlencode(serialize($mdata));
 	   header("Location:$url");
      
 	}

 	public function editCat($id=NULL)
 	{
       $this->load->view('admin/header');
 	   $this->load->view('admin/sidebar');

 	  $data=array();
      $table="category";
 	  $id=$id;	
      $catModel=$this->load->model("CatModel");
      $data['catbyid']=$catModel->catById($table,$id);
      $this->load->view("admin/catupdate", $data);

      $this->load->view('admin/footer');
 	}

 	 	public function updateCat($id=NULL)
 	{
 		$table="category";
 		
 		$cId=$id;
 	    $cName=$_POST['cName'];
 	   $title=$_POST['title'];
 	   $data= array(
 	   	'cName' =>$cName , 
        'title' => $title 
 	   	);	
        $cond="cId=$cId";
 	   	$catModel=$this->load->model("CatModel");
 	   	$result=$catModel->catUpdate($table,$data,$cond);

 	   	$mdata=array();
 	  if ($result==1) {
 	  	 $mdata['msg']="Category Updated Successfully";
 	  }
 	  else
 	  {
 	  	$mdata['msg']="Category Not Updated Successfully";
 	  }
 	   $url=BASE_URL."/Admin/category?msg=".urlencode(serialize($mdata));
 	   header("Location:$url");
      
 	}

 	public function delCat($id=NULL)
 	{
 		$table="category";
 		$cond="cId=$id";

 		$catModel=$this->load->model("CatModel");
 	   	$result=$catModel->delCatById($table,$cond);

 	   	$mdata=array();
 	  if ($result==1) {
 	  	 $mdata['msg']="Category Deleted Successfully";
 	  }
 	  else
 	  {
 	  	$mdata['msg']="Category Not Deleted Successfully";
 	  }
 	   $url=BASE_URL."/Admin/category?msg=".urlencode(serialize($mdata));
 	   header("Location:$url");
 	}

 	public function addPost()
 	{
 		$data=array();
 		$tableCat="category";
        $this->load->view('admin/header');
 		$this->load->view('admin/sidebar');

 		$catmodel=$this->load->model("catModel");
        $data['cat']=$catmodel->catList($tableCat);
 		

 		$this->load->view('admin/addpost',$data);
 		$this->load->view('admin/footer');
 	}

 	public function postList()
 	{ 
 		$tableCat="category";
 		$tablePost="post";
 	    

 	    $this->load->view('admin/header');
 		$this->load->view('admin/sidebar');
        


         $postModel=$this->load->model("Postmodel");
	     $data['allpost']=$postModel->allpostlist($tablePost);
         
         $catmodel=$this->load->model("catModel");
         $data['cat']=$catmodel->catList($tableCat);

        $this->load->view('admin/postlist',$data);
 		$this->load->view('admin/footer');	
 	}

 	public function addNewPost()
 	{
 	 
 
 	 		
 	 	
 	$input=$this->load->validation('Dform'); 
 	$input->post('pTitle')
 		      ->isEmpty()
 		      ->length(10,500);
 	$input->post('content')
 		      ->isEmpty();
 	$input->post('cat')
 		      ->isCatEmpty();
 		  
    

    if ($input->submit()) {
    	
    

 		      
       $table="post";

 	   $pTitle=$input->values['pTitle'];
 	   $content=$input->values['content'];
 	   $cat=$input->values['cat'];
 	   $data= array(
 	   	'pTitle' =>$pTitle , 
        'content' => $content, 
        'cat' => $cat
 	   	);	

 	  $postmodel=$this->load->model("postModel");
 	  $result= $postmodel->insertpost($table,$data);
 	  $mdata=array();
 	  if ($result==1) {
 	  	 $mdata['msg']="Post Added Successfully";
 	  }
 	  else
 	  {
 	  	$mdata['msg']="Post Not Added Successfully";
 	  }
 	   $url=BASE_URL."/Admin/postlist?msg=".urlencode(serialize($mdata));
 	   header("Location:$url");
 	}else
 	{
 		 $tableCat="category";
 	   $data["postErrors"]=$input->errors;

 	   $this->load->view('admin/header');
 		$this->load->view('admin/sidebar');

 		$catmodel=$this->load->model("catModel");
        $data['cat']=$catmodel->catList($tableCat);
 		

 		$this->load->view('admin/addpost',$data);
 		$this->load->view('admin/footer');


 	   	
 	}
 	

 	}

 	public function editPost($id=NULL)
 	{
        $tableCat="category";
 		$tablePost="post";
 	    

 	    $this->load->view('admin/header');
 		$this->load->view('admin/sidebar');

 		$postModel=$this->load->model("Postmodel");
	     $data['postbyid']=$postModel->getPostById($tablePost,$id);
         
         $catmodel=$this->load->model("catModel");
         $data['cat']=$catmodel->catList($tableCat);

         $this->load->view('admin/editpost',$data);
 		$this->load->view('admin/footer');	

 	}

 	public function updatepost($id=NULL)
 	{
 		$input=$this->load->validation('Dform');
 		$input->post('pTitle');
 		$input->post('content');
 		$input->post('cat');
      	$cond="cId=$cId";


       $table="post";

 	   $pTitle=$input->values['pTitle'];
 	   $content=$input->values['content'];
 	   $cat=$input->values['cat'];
 	   $data= array(
 	   	'pTitle' =>$pTitle , 
        'content' => $content, 
        'cat' => $cat
 	   	);	

 	  $postmodel=$this->load->model("postModel");
 	  $result= $postmodel->updatePost($table,$data,$cond);
        


 	

 	   	$mdata=array();
 	  if ($result==1) {
 	  	 $mdata['msg']="Post Updated Successfully";
 	  }
 	  else
 	  {
 	  	$mdata['msg']="Post Not Updated Successfully";
 	  }
 	   $url=BASE_URL."/Admin/postlist?msg=".urlencode(serialize($mdata));
 	   header("Location:$url");


 	}

 	public function delPost($id=NULL)
 	{
        $table="post";
 		$cond="pId=$id";

 		$postModel=$this->load->model("Postmodel");
 	   	$result=$postModel->delPostById($table,$cond);

 	   	$mdata=array();
 	  if ($result==1) {
 	  	 $mdata['msg']="Post Deleted Successfully";
 	  }
 	  else
 	  {
 	  	$mdata['msg']="Post Not Deleted Successfully";
 	  }
 	   $url=BASE_URL."/Admin/postlist?msg=".urlencode(serialize($mdata));
 	   header("Location:$url");

 	}



 	
 }


?>