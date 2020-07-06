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
 	private $dbname = 'rohan';


 	 private $connection;

 	 /**
 	  * Database connection method
 	  */

 	 private function Connection()
 	 {
      return $this ->connection = new mysqli ($this ->host, $this ->user, $this ->pass, $this ->dbname);  
 	 }

     // File upload management

       public function fileUpload($file, $location = '', array $file_type = ['png', 'jpg'])
       {
           // file info

       	   $file_name = $file['name'];
       	   $file_tmp  = $file['tmp_name'];
       	   $file_size = $file['size'];

       	   // File extension
       	   $file_array = explode('.', $file_name);
       	   $file_name_extension = strtolower(end($file_array));

       	   // Unique file name
           $unique_file_name = md5(time(). rand(1, 100000)) . '.' . $file_name_extension;

           // File upload
           move_uploaded_file($file_tmp, $location . $unique_file_name);

            return $unique_file_name;
       }

 	 protected function insert($table, array $data)
 	 {  
 	 	// echo "<pre>";
    //        print_r($data);
 	 	// echo "</pre>";

    
         // Sql column for data
         $array_ke = array_keys($data);
         $array_col = implode(',', $array_ke);
          
          // Sql value for data
          $array_v = array_values($data);
            foreach ($array_v as $value) {
            	$form_value[] = "'" . $value . "'";
            }

          $array_valu = implode(',', $form_value);

           
 	   $sql = "INSERT INTO oop_obj($array_col)VALUES($array_valu)";
 	  $query = $this ->connection() ->query ($sql);

        if ($query) {
        	return true;
        }
 	 }
 
 }

?>