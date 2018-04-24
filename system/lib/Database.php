<?php

/**
* 
*/
class Database extends PDO
{
	
	function __construct($dsn,$user,$pass)
	{
		
		parent::__construct($dsn,$user,$pass);
	}

	public function select($sql,$data=array(),$fetchStyle=PDO::FETCH_ASSOC)
	{
      $stmt=$this->prepare($sql);
      foreach ($data as $key => $value) {
      	 $stmt->bindValue($key,$value);
      }


     
  	   $stmt->execute();
  	    return $stmt->fetchALL($fetchStyle);
    /*
	 $sql="SELECT * FROM $table";
	 $stmt=$this->prepare($sql);
     $stmt->execute();
     return $stmt->fetchALL();
     */
	}

	public function insert($table,$data)
	{
       
       $keys=implode(",",array_keys($data));
       $values=":".implode(", :",array_keys($data));





       $sql="INSERT INTO $table($keys)
            VALUES($values)";
        $stmt=$this->prepare($sql); 
        foreach ($data as $key => $value) {
      	 $stmt->bindValue(":$key",$value);
      }
        return $stmt->execute();

	}

  public function update($table,$data,$cond)
  {
      $updateKeys=NULL;
      foreach ($data as $key => $value) {
        $updateKeys .="$key=:$key,";
      }
      $updateKeys=rtrim($updateKeys,",");

      $sql="UPDATE $table SET $updateKeys WHERE $cond";
      $stmt=$this->prepare($sql);
     foreach ($data as $key => $value) {
         $stmt->bindValue(":$key",$value);
      }
        return $stmt->execute();

  }

  public function delete($table,$cond)
  {
    $sql="DELETE FROM $table WHERE $cond";
    return $this->exec($sql);
  }

  public function affectedRows($sql,$username,$password)
  {
     $stmt=$this->prepare($sql);
     $stmt->execute(array($username,$password));
     return $stmt->rowCount();

  }

  public function selectUser($sql,$username,$password)
  {
     $stmt=$this->prepare($sql);
     $stmt->execute(array($username,$password));
    return $stmt->fetchALL(PDO::FETCH_ASSOC);
  }
}


?>