<!DOCTYPE html>
<html>
<head>
	<title>data</title>
</head>
<body>
<form method="post">
	
	<label>Name</label>
	<input type="text" name="school">
	<input type="submit" name="submit">

</form>


<?php 


include 'include/connection.php';


$rand ="";
$school = "";
$password="";
$errors =array();

if (isset($_POST['submit'])) {
	
		$school=$_POST['school'];

if (empty($school)) {
    array_push($errors, "School id Is Required");

  }
	



  if(count($errors) == 0) {
   
  

    $query = "SELECT * FROM schools WHERE name='{$school}'";
    $result = mysqli_query($db, $query);

  if(mysqli_num_rows($result) == 0) {

  	while (true) {	
		$rand = rand();
	    $query = "SELECT * FROM schools WHERE localid='{$rand}'";
	    $result = mysqli_query($db, $query);
		if(mysqli_num_rows($result) == 0) {

				$password = md5($rand);
				
				break;

		}

      }



		$query = "INSERT INTO `schools`(`id`,`name`, `password`, `localid`) VALUES (NULL,'{$school}','{$password}','{$rand}')";
	    $result = mysqli_query($db, $query);


  }

  }

		




}

?>
</body>
</html>