<?php require_once "vendor/autoload.php"; ?>
<?php  
	
	// Class use
	use App\Controller\Student;



	// class instance 
  $student = new Student;

  // Data delete system

  if(isset($_GET['id'])){
  	$id = $_GET['id'];
  	
  	$mess = $student -> dataDelete($id);
  }
  
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap-table ">
		<?php
          if(isset($mess)){
          	echo $mess;
          }
		?>
	  <a class="btn btn-primary" href="index.php">Add Students</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						<?php
                          
                        $data = $student -> allStudents('DESC');
                         $i = 1;
                        while ($stu = $data -> fetch_assoc()) :
                     
						?>
						<tr>
							<td><?php echo $i; $i++;?></td>
							<td><?php echo $stu['name']; ?></td>
							<td><?php echo $stu['email']; ?></td>
							<td><?php echo $stu['cell']; ?></td>
							<td><img src="media/img/students/<?php echo $stu['photo']; ?>" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="view.php?id=<?php echo $stu['id']; ?>">View</a>
								<a class="btn btn-sm btn-warning" href="#">Edit</a>
								<a id="delete" class="btn btn-sm btn-danger" href="?id=<?php echo $stu['id']; ?>">Delete</a>
							</td>
						</tr>
						
					<?php endwhile;?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script>
		$('a#delete').click(function(){
           let con = confirm('Are you sure!');

           if(con == true){
           	return true;
           }else{
           	return false;
           }
		});
	</script>
</body>
</html>