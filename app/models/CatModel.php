<?php 

 /**
 *CatModel 
 */
 class CatModel extends Dmodel
 {
 	
 	public function __construct()
 	{
 		parent::__construct();
 	}
  public function catList($table)
  {
  	$sql="SELECT * from  $table";
    return $this->db->select($sql);

    /* $sql="SELECT * FROM category";
     $query=$this->db->query($sql);
     $result=$query->fetchAll();
     return $result;*/
  }
  public function catById($table,$id)
  {
    	$sql="SELECT * from  $table where cid=:id";
    	$data=array(":id"=> $id);
    	return $this->db->select($sql,$data);

  }

  public function insertCat($table,$data)
  {
  	return $this->db->insert($table,$data);
  }

  public function catUpdate($table,$data,$cond)
  {
   return $this->db->update($table,$data,$cond);

  }

  public function delCatById($table,$cond)
  {
     return $this->db->delete($table,$cond);
  }


 

 }


?> 