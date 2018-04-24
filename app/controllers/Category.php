<?php

/**
* 
*/
class Category extends Dcontroller
{
	
	function __construct()
	{
		parent::__construct();
	}

		public function category()
 	{
 	  $data=array();
 	   $table="category";	
      $catModel=$this->load->model("CatModel");
      $data['cat']=$catModel->catList($table);
      $this->load->view("category",$data);
 	}

 	public function catById()
 	{
 	  $data=array();
 	  $table="category";
 	  $id=1;	
      $catModel=$this->load->model("CatModel");
      $data['catbyid']=$catModel->catById($table,$id);
      $this->load->view("catbyid",$data);
 	}

  public function addCategory()
  {
     
    $this->load->view("addcat");
  }

   public function updateCategory()
  {
      
 	  $table="category";
 	  $id=1;	
      $catModel=$this->load->model("CatModel");
      $data=array();
      $data['catbyid']=$catModel->catById($table,$id);

      $this->load->view("catupdate", $data);

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
 	   $this->load->view("addcat",$mdata);
      
 	}

 	public function updateCat()
 	{
 		$table="category";
 		
 		$cId=$_POST['cId'];
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
 	   $this->load->view("addcat",$mdata);
      
 	}

 	public function delCatById()
 	{
       $table="category";
 		$cond="cId=2";

 		$catModel=$this->load->model("CatModel");
 	   	$catModel->delCatById($table,$cond);

 	}
}

?>