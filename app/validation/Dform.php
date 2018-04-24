<?php 

class Dform 
{
	public $curvalue;
	public $values=array();
    public $errors=array();

	function __construct()
	{

	}
	public function post($key)
	{
			if (!isset($_POST[$key])) {
			  header("Location:".BASE_URL."/Admin/addPost");
		}
		
        $this->values[$key]=trim($_POST[$key]);
		$this->curvalue=$key;
		return $this;
	
		
	}

	public function isEmpty(){
		if (empty($this->values[$this->curvalue])) {
			$this->errors[$this->curvalue]['empty']="Field Must Not Be Empty";
		}
		return $this;
	}
	public function isCatEmpty(){
		if (empty($this->values[$this->curvalue])==0 ) {
			$this->errors[$this->curvalue]['empty']="Field Must Not Be Empty";
		}
		return $this;
	}

	public function length($min=0,$max)
	{
		if (strlen($this->values[$this->curvalue])<$min or strlen($this->values[$this->curvalue])>$max ) {
			$this->errors[$this->curvalue]['length']="Should Min ".$min." And Max ".$max."Chars";
		}
		return $this;
	}

	public function submit(){
         if (empty($this->errors)) {
         	return true;
         }
         else
         {
         	return false;
         }

	}
}

?>