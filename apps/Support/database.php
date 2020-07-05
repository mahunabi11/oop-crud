<?php
  
  namespace App\Support;

  use mysqli;
 /**
  * Database connection property
  */
 abstract class Database
 {
 	private $host = 'localhost';
 	private $user = 'root';
 	private $pass = '';
 	private $dbname = 'obj';


 	 private $conn;

 	 /**
 	  * Database connection method
 	  */

 	 private function Connection()
 	 {
      return $this ->conn = new mysqli ($this ->host, $this ->user, $this ->pass, $this ->dbname);  
 	 }
 
 }

?>