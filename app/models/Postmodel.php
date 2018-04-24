<?php 

 /**
 *CatModel 
 */
 class Postmodel extends Dmodel
 {
 	
 	public function __construct()
 	{
 		parent::__construct();
 	}

  public function allpost($table)
  {

    $sql="SELECT * from  $table order by pId limit 3";
    return $this->db->select($sql);
  }
  public function allpostlist($tablePost)
  {
     $sql="SELECT * from  $tablePost order by pId desc";
    return $this->db->select($sql);
  }


  public function postById($tablePost,$tableCat,$id)
  {
    $sql="SELECT $tablePost.*,$tableCat.cName from
          $tablePost INNER JOIN $tableCat
          ON $tablePost.cat=$tableCat.cId
          where $tablePost.pId=$id
          ";
    return $this->db->select($sql);

  }
  public function postByCat($tablePost,$tableCat,$id)
  {
    $sql="SELECT $tablePost.*,$tableCat.cName from
          $tablePost INNER JOIN $tableCat
          ON $tablePost.cat=$tableCat.cId
          where $tableCat.cId=$id
          ";
    return $this->db->select($sql);

  }

  public function latestPost($tablePost)
  {
     $sql="SELECT * from  $tablePost order by pId limit 5";
     return $this->db->select($sql);
  }
   public function postBySearch($tablePost,$keyword,$cat)
  {
      if (empty($keyword)&& $cat==0) {
        header("Location:".BASE_URL."/Index/home");
      }

     if (isset($keyword)&&!empty($keyword)) {
       $sql="SELECT * FROM $tablePost WHERE pTitle LIKE '%$keyword%' or content LIKE '%$keyword%'";
     }else if (isset($cat)) {
           $sql="SELECT * from  $tablePost where cat=$cat";
     }
     if (isset($sql)) {
      return $this->db->select($sql);
     }
    
  }

  public function insertpost($table,$data)
  {
    return $this->db->insert($table,$data);
  }
   
   public function getPostById($tablePost,$id)
   {
    $sql="SELECT * from  $tablePost where pId=$id";
    return $this->db->select($sql);
   }

   public function updatePost($table,$data,$cond)
   {
       return $this->db->update($table,$data,$cond);
   }

   public function delPostById($table,$cond)
   {
     return $this->db->delete($table,$cond);
   }

  }


?> 