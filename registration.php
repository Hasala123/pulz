<?php include 'include/connection.php'; ?>
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

  
</head>

<body class="index-page sidebar-collapse">

  <!-- Navbar -->
 <?php include 'include/nav.php'; ?>
  <!-- End Navbar -->
 
<div class="page-header" style="background-image: url('assets/img/login-image.jpg');">
    <div class="filter"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 ml-auto mr-auto">
          <div class="card card-register">
        
            <form class="register-form" method="post">
              <label>School</label>
              
              <select class="form-control" name="school" required="">
                <?php include 'include/schools.php'; ?>
              </select>

              <label>School ID</label>
              <input type="number" class="form-control" placeholder="ID" autocomplete="no" name="schoolid" required="">


              <label>Participation</label>
              
              <select class="form-control" name="participation" required="">
                <option>Solo</option>
                <option>Squad</option>
              </select>


              <button class="btn btn-danger btn-block btn-round"  name="submit" type="submit">Submit</button>

            </form>


          <?php 
session_start();

$school = "";
$schoolid = "";
$participation = "";
$errors = array();



if (isset($_POST['submit'])) {

  $school   = $_POST['school'];
  $schoolid = $_POST['schoolid'];
  $participation   = $_POST['participation'];

  if (empty($school)) {
    array_push($errors, "School Name Is Required");

  }

  if (empty($schoolid)) {
    array_push($errors, "School id Is Required");

  }


  if(count($errors) == 0) {
    $password = md5($schoolid);

    $query = "SELECT * FROM schools WHERE name='{$school}' AND password='{$password}'";
    $result = mysqli_query($db, $query);

  if(mysqli_num_rows($result) == 1) {
      global $school; 

        

        $_SESSION['schoolname'] = $school;
        $_SESSION['success'] = "Got School";

        if ($participation == "Solo") {
           header('location: register_solo.php');
        }else if ($participation == "Squad") {
           header('location: register_squad.php');
        }

       
      }else{

        array_push($errors, "Invalid User Name Or Passoword");
      }

  }else{

  }
 
}


 ?>
            
          </div>
        </div>
      </div>
    </div>
   
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
