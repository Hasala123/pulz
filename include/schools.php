<?php  

$query =" SELECT * FROM schools";

  $result = mysqli_query($db, $query);

if($result){

   while ($school = mysqli_fetch_assoc($result)) {
 	$sname = $school['name'];

 	echo '<option>'.$sname.'</option>';
 
   
    }
}


?>