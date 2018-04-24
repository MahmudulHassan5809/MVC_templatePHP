<?php 
 /**
 * 
 */

 class Load 
 {
 	
 	function __construct()
 	{
 		
 	}

 	public function view($filename,$data=false)
 	{
 		if ($data==true) {
 			extract($data);
 		}
      include 'app/views/'.$filename.'.php';
 	}

 	public function model($CatModel)
 	{
 		 include 'app/models/'.$CatModel.'.php';
 		return new $CatModel();
 	}
 	public function validation($modelname)
 	{
 		 include 'app/validation/'.$modelname.'.php';
 		return new $modelname();
 	}
 }


?>