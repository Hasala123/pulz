<?php
session_start();

 if ($_SESSION['success'] == "Got School" ) {
  


}else {
   header('location:index.php');

} ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="#">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   •Pulz•
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/pulz.css?v=2.2.0" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/sourcesanspro-font.css">
  <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>


</head>

<body class="index-page sidebar-collapse">

  <!-- Navbar -->
 <?php// include 'include/nav.php'; ?>
  <!-- End Navbar -->

<div class="page-header" style="background-image: url('assets/img/login-image.jpg');">

  <div class="page-content">
    <div class="form-v8-content">
    
      <div class="form-right">
        <div class="tab">
          <div class="tab-inner">
            <button class="tablinks" onclick="openCity(event, 'solo')" id="defaultOpen">Solo</button>
          </div>
       
        </div>


        <form class="form-detail" action="#" method="post" enctype="multipart/form-data">
          <div class="tabcontent" id="solo">
            <div class="form-row">
              <label class="form-row-inner">
                <input type="text" name="firstname" id="first_name" class="input-text" autocomplete="no" required  >
                <span class="label">First Name</span>
                  <span class="border"></span>
              </label>
            </div>
            <div class="form-row">
              <label class="form-row-inner">
                <input type="text" name="lastname" id="last_name" class="input-text" autocomplete="no" required>
                <span class="label">Last Name</span>
                  <span class="border"></span>
              </label>
            </div>
<div class="form-row">
              <label class="form-row-inner">
                <select class="input-text" name="gender" style="padding: 5px; margin-left: 18px;" required>

                  <option class="input-text" style="background: rgba(81,85,93,0.58);">Male</option>
                  <option class="input-text" style="background: rgba(81,85,93,0.58);">Female</option>
                  <!-- <option></option> -->
                </select>
                <span class="label">Gender</span>
                  <span class="border"></span>
              </label>
            </div> 

            <div class="form-row">
              <label class="form-row-inner">
                <input type="date" name="birthday" id="last_name" class="input-text" autocomplete="no" required style="padding: 30px; padding-left: 5px; padding-bottom: 5px; margin-left: 18px;">
                <span class="label">Birthday</span>
                  <span class="border"></span>
              </label>
            </div>
 <div class="form-row">
              <label class="form-row-inner">
                <input type="number" name="grade" id="grade" class="input-text" autocomplete="no" required maxlength="2" max="13">
                <span class="label">Grade</span>
                <span class="border"></span>
              </label>
            </div>
              <div class="form-row">
              <label class="form-row-inner">
                <select class="input-text" name="category" style="padding: 5px; margin-left: 18px;" required>
                  <option  class="input-text" style="background: rgba(81,85,93,0.58);">Select</option>
                  <option class="input-text" style="background: rgba(81,85,93,0.58);">Graphic Design</option>
                  <option class="input-text" style="background: rgba(81,85,93,0.58);">Web Design</option>
                  <option class="input-text" style="background: rgba(81,85,93,0.58);">Presentation</option>
                  <!-- <option></option> -->
                </select>
                <span class="label">Project Type</span>
                  <span class="border"></span>
              </label>
            </div>

           
            <div class="form-row">
              <label class="form-row-inner">
                <input type="text" name="telephone" id="telephone_no" class="input-text" required>
                <span class="label">Contact No</span>
                <span class="border"></span>
              </label>
            </div>
            <div class="form-row">
              <label class="form-row-inner">
                <input type="email" name="email" id="email_address" class="input-text" required>
                <span class="label">Email Address</span>
                <span class="border"></span>
              </label>
            </div>


            <div class="form-row">
              <label class="form-row-inner">
                <input type="file" name="file" id="email_address" class="input-text" required  style="margin-top: 30px; margin-left:10px;">
                <span class="label">Project Files</span>
                <span class="border"></span>
              </label>
            </div>

            <div class="form-row-last">
              <input type="submit" name="solo" class="register" value="Submit">
            </div>
          </div>

        </form>


<?php 


include 'include/connection.php';

$firstname  = "";
$lastname = "";
$gender = "";
$birthday = "";
$grade  = "";
$category = "";
$telephone  = "";
$email  ="";
$school  = $_SESSION['schoolname'];
$errors =array();

if (isset($_POST['solo'])) {
  
    $firstname  = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$grade  = $_POST['grade'];
$category = $_POST['category'];
$telephone  = $_POST['telephone'];
$email  = $_POST['email'];

if (empty($firstname)) {
    array_push($errors, "School id Is Required");

}
if (empty($lastname)) {
    array_push($errors, "School id Is Required");

}
if (empty($gender)) {
    array_push($errors, "School id Is Required");

}
if (empty($birthday)) {
    array_push($errors, "School id Is Required");

}
if (empty($grade)) {
    array_push($errors, "School id Is Required");

}
if (empty($category)) {
    array_push($errors, "School id Is Required");

}
if (empty($telephone)) {
    array_push($errors, "School id Is Required");

}if (empty($email)) {
    array_push($errors, "School id Is Required");

}if (empty($school)) {
    array_push($errors, "School id Is Required");

}

  
if(count($errors) == 0) {
   
  
$query = "SELECT * FROM solo WHERE mail='{$email}'";
  $result = mysqli_query($db, $query);
  if(mysqli_num_rows($result) == 1) {
    array_push($errors, "User Name Is Already Taken");
      
    }

if(count($errors) == 0) {
  

  $name     = $_FILES['file']['name'];
  $extension = strtolower(substr($name,strpos($name,'.')+ 1)); 
  $size     = $_FILES['file']['size'];
  $type     = $_FILES['file']['type'];
  $tmp_name   = $_FILES['file']['tmp_name'];



if (isset($name)) {
  if (!empty($name)) {
    
    //global $error;
    if ($extension=="zip" or $extension=="rar" or $extension=="chamudi") {
      # code...
    $sname = $school."_".$category."_".$firstname."_".$lastname;

      $location ='project/';
      $picname = $sname.".".$extension;

      move_uploaded_file($tmp_name,$location.$picname);
        
       
    }

}
}

    $sql =  "INSERT INTO `solo`(`id`, `firstname`, `lastname`, `gender`, `bday`, `grade`, `type`, `phone`, `mail`,`school`,`file`) VALUES (NULL,'{$firstname}','{$lastname}','{$gender}','{$birthday}','{$grade}','{$category}','{$telephone}','{$email}','{$school}','{$sname}')";
    $res = mysqli_query($db, $sql);

      if ($res == 1) {

   echo '<script type="text/javascript">
        alert("Registration Compteted!");
      </script>';

        $_SESSION = array();


            if (isset($_COOKIE[session_name()])) {


                setcookie(session_name(), '', time()-86400,'/');    

                 }

                session_destroy();
              //  die();
            header('location: index.php');
        
      }
  }

  }

    




}

?>
<!--SQUAD-->
<!----------------------------------->



      </div>
    </div>
  </div>
  <script type="text/javascript">
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>



</div>



    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
   
    <script src="./assets/js/plugins/bootstrap-switch.js"></script>

    <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  
    <script src="./assets/js/plugins/moment.min.js"></script>
    <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
   
    <script src="./assets/js/pulz.js?v=2.2.0" type="text/javascript"></script>

    
    <script>
      $(document).ready(function() {

      

        function scrollToDownload() {

          if ($('.section-download').length != 0) {
            $("html, body").animate({
              scrollTop: $('.section-download').offset().top
            }, 1000);
          }
        }
      });
    </script>
</body>

</html>
