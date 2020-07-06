<?php
  
  namespace App\Controller;

  use App\Support\database;
 /**
  * Database
  */
 class Student extends Database
 {
 	/**
 	 * Add new student
 	 */
    public function addStudent($name, $email, $cell, $photo)
    { 
    	
       
       // Data send
      $data =	$this -> insert('oop_obj', [
            'name'  => $name,
            'email' => $email,
            'cell'  => $cell,
            'photo' => $this -> fileUpload($photo, 'media/img/students/'),
        ]);
       if ($data){
       	return $mess = "<p class='alert alert-success'>Data Added Successful !<button class='close' data-dismiss='alert'>&times;</button></p>";
       }
    } 
 }

?> 