<?php 

 /**
 * 
 */
 class Index extends Dcontroller
 {
 	
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
    
    public function Index()
    {
    	$this->home();
    }

 	public function home()
 	{
 		$data=array();
 		$tablePost="post";
 		$tableCat="category";
 		$this->load->view("header");

 		 $catModel=$this->load->model("CatModel");
         $data['cat']=$catModel->catList($tableCat);
         $this->load->view("search",$data);
 		
        
	 	  
	 	  
	      $postModel=$this->load->model("Postmodel");
	      $data['allpost']=$postModel->allpost($tablePost);
	      $this->load->view("content",$data);
        
        
 	  
       
        $data['cat']=$catModel->catList($tableCat);
        $data['latestpost']=$postModel->latestPost($tablePost);
        $this->load->view("sidebar",$data);
 		
        



 		$this->load->view("footer");

 		
 		
 		
 	}

 	 public function postDetails($id)
 	 { 

 	   $data=array();
 	  $tablePost="post";
 	  $tableCat="category";	  
 	  $id=$id;
 	  $this->load->view("header");
      
     
 	 	
      $catModel=$this->load->model("CatModel");
      $data['cat']=$catModel->catList($tableCat);
      $this->load->view("search",$data);
      
 	  
      $postModel=$this->load->model("Postmodel");
      $data['postbyid']=$postModel->postById($tablePost,$tableCat,$id); 
 	  $this->load->view("details",$data);
      
        
         
 	   
        
        $data['cat']=$catModel->catList($tableCat);
        $data['latestpost']=$postModel->latestPost($tablePost);
        $this->load->view("sidebar",$data);
 		$this->load->view("footer");
 	 }

 	 public function postbyCat($id)
 	 {
       $id=$id;
 	  $data=array();
 	  $tablePost="post";
 	  $tableCat="category";

 	   $this->load->view("header");
 	      $catModel=$this->load->model("CatModel");
       $data['cat']=$catModel->catList($tableCat);
 	     $this->load->view("search",$data);
      	
      $postModel=$this->load->model("Postmodel");
      $data['postbycat']=$postModel->postByCat($tablePost,$tableCat,$id); 
 	  $this->load->view("postbycat",$data);


 	 	 
 	    
        //$catModel=$this->load->model("CatModel");
        $data['cat']=$catModel->catList($tableCat);
        $data['latestpost']=$postModel->latestPost($tablePost);
        $this->load->view("sidebar",$data);
 		

 		$this->load->view("footer");	
 	 }

 	 public function search()
 	 {

 	  $data=array();
 	  if (isset($_REQUEST['keyword']) && isset($_REQUEST['cat'])) {
 	  $keyword=$_REQUEST['keyword'];
 	  $cat=$_REQUEST['cat'];
 	  }
 	  
 	  $tablePost="post";
 	  $tableCat="category";

 	     $this->load->view("header");
 	     $catModel=$this->load->model("CatModel");
         $data['cat']=$catModel->catList($tableCat);
 	     $this->load->view("search",$data);
      	
      $postModel=$this->load->model("Postmodel");
      if (isset($keyword)&&isset($cat)) {
      $data['postbysearch']=$postModel->postBySearch($tablePost,$keyword,$cat);
      }
       
 	  $this->load->view("sreasult",$data);


 	 	 
 	    
       
        $data['cat']=$catModel->catList($tableCat);
        $data['latestpost']=$postModel->latestPost($tablePost);
        $this->load->view("sidebar",$data);
 		

 		$this->load->view("footer");	
 	 }
 
 }

?>