 
<?php

interface MethodsInterface
{
	function GetInfo();
}


class MyClass{

   public $name;
	 public $surname;
	 
	 
	 
	    function Setname($name) {
        $this->name = $name;
        }
	
	 function GetInfo()
		{
			echo $this->name;
			echo '-';
			echo $this->surname;
	    }
	  
	 
	  public function __construct($name,$surname) { 
	  $this->name=$name;
		  $this->surname=$surname;
	  }
}
$test=new MyClass("asd","fds");
$test->GetInfo();

class MyClass2 extends MyClass{
	
	
	public function __construct($name, $surname,$age) {
		$this->age=$age;
        parent::__construct($name, $surname);
		
	}
		public  $age;
	
		function GetInfo()
		{
			echo $this->name;
			echo '-';
			echo $this->surname;
			echo '-';
			echo $this->age;
			
		}

}
$test1=new MyClass2("123","123","jjj");
echo $test1->GetInfo();
