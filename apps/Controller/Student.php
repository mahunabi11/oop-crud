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

    public function allStudents()
    {
     $data = $this -> all('oop_obj', 'DESC');
      if($data){
      	return $data;
      }
    }

    /**
     * Data delete method
     */

    public function dataDelete($id)
    {
    	$data = $this -> delete('oop_obj', $id);

    	if($data){
    		return  "<p class='alert alert-success'>Data Deleted Successful !<button class='close' data-dismiss='alert'>&times;</button></p>";
    	}
    }

    // Single data view method

    public function singleStuView($id)
    {
    	$data = $this ->find('oop_obj', $id);
    	return $data;
    }
 }

?> 