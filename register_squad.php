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
            <button class="tablinks" onclick="openCity(event, 'leader')" id="defaultOpen">Team Leader</button>
          </div>

<div class="tab-inner">
            <button class="tablinks" onclick="openCity(event, 'member1')" id="defaultOpen">Member 1</button>
          </div>

<div class="tab-inner">
            <button class="tablinks" onclick="openCity(event, 'member2')" id="defaultOpen">Member 2</button>
          </div>

<div class="tab-inner">
            <button class="tablinks" onclick="openCity(event, 'member3')" id="defaultOpen">Member 3</button>
          </div>

       
        </div>


        <form class="form-detail" action="#" method="post">

          <div class="tabcontent" id="leader">
   

            <div class="form-row">
              <label class="form-row-inner">
                <input type="text" name="firstname1" id="first_name" class="input-text" autocomplete="no" required  >
                <span class="label">First Name</span>
                  <span class="border"></span>
              </label>
            </div>
            <div class="form-row">
              <label class="form-row-inner">
                <input type="text" name="lastname1" id="last_name" class="input-text" autocomplete="no" required>
                <span class="label">Last Name</span>
                  <span class="border"></span>
              </label>
            </div>
<div class="form-row">
              <label class="form-row-inner">
                <select class="input-text" name="gender1" style="padding: 5px; margin-left: 18px;" required>

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
                <input type="date" name="birthday1" id="last_name" class="input-text" autocomplete="no" required style="padding: 30px; padding-left: 5px; padding-bottom: 5px; margin-left: 18px;">
                <span class="label">Birthday</span>
                  <span class="border"></span>
              </label>
            </div>
 <div class="form-row">
              <label class="form-row-inner">
                <input type="number" name="grade1" id="grade" class="input-text" autocomplete="no" required maxlength="2" max="13">
                <span class="label">Grade</span>
                <span class="border"></span>
              </label>
            </div>
              

           
            <div class="form-row">
              <label class="form-row-inner">
                <input type="text" name="telephone1" id="telephone_no" class="input-text" required>
                <span class="label">Contact No</span>
                <span class="border"></span>
              </label>
            </div>
            <div class="form-row">
              <label class="form-row-inner">
                <input type="email" name="email1" id="email_address" class="input-text" required>
                <span class="label">Email Address</span>
                <span class="border"></span>
              </label>
            </div>

            <div class="form-row-last">
              <input type="submit" name="squad" class="register" value="" disabled="">
            </div>
          </div>









          <div class="tabcontent" id="member1">
            <div class="form-row">
              <label class="form-row-inner">
                <input type="text" name="firstname2" id="first_name" class="input-text" autocomplete="no" required  >
                <span class="label">First Name</span>
                  <span class="border"></span>
              </label>
            </div>
            <div class="form-row">
              <label class="form-row-inner">
                <input type="text" name="lastname2" id="last_name" class="input-text" autocomplete="no" required>
                <span class="label">Last Name</span>
                  <span class="border"></span>
              </label>
            </div>
<div class="form-row">
              <label class="form-row-inner">
                <select class="input-text" name="gender2" style="padding: 5px; margin-left: 18px;" required>

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
                <input type="date" name="birthday2" id="last_name" class="input-text" autocomplete="no" required style="padding: 30px; padding-left: 5px; padding-bottom: 5px; margin-left: 18px;">
                <span class="label">Birthday</span>
                  <span class="border"></span>
              </label>
            </div>
 <div class="form-row">
              <label class="form-row-inner">
                <input type="number" name="grade2" id="grade" class="input-text" autocomplete="no" required maxlength="2" max="13">
                <span class="label">Grade</span>
                <span class="border"></span>
              </label>
            </div>
              

           
            <div class="form-row">
              <label class="form-row-inner">
                <input type="text" name="telephone2" id="telephone_no" class="input-text" required>
                <span class="label">Contact No</span>
                <span class="border"></span>
              </label>
            </div>
            <div class="form-row">
              <label class="form-row-inner">
                <input type="email" name="email2" id="email_address" class="input-text" required>
                <span class="label">Email Address</span>
                <span class="border"></span>
              </label>
            </div>

           <div class="form-row-last">
              <input type="submit" name="squad" class="register" value="" disabled="">
            </div>
          </div>









          <div class="tabcontent" id="member2">
            <div class="form-row">
              <label class="form-row-inner">
                <input type="text" name="firstname3" id="first_name" class="input-text" autocomplete="no" required  >
                <span class="label">First Name</span>
                  <span class="border"></span>
              </label>
            </div>
            <div class="form-row">
              <label class="form-row-inner">
                <input type="text" name="lastname3" id="last_name" class="input-text" autocomplete="no" required>
                <span class="label">Last Name</span>
                  <span class="border"></span>
              </label>
            </div>
<div class="form-row">
              <label class="form-row-inner">
                <select class="input-text" name="gender3" style="padding: 5px; margin-left: 18px;" required>

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
                <input type="date" name="birthday3" id="last_name" class="input-text" autocomplete="no" required style="padding: 30px; padding-left: 5px; padding-bottom: 5px; margin-left: 18px;">
                <span class="label">Birthday</span>
                  <span class="border"></span>
              </label>
            </div>
 <div class="form-row">
              <label class="form-row-inner">
                <input type="number" name="grade3" id="grade" class="input-text" autocomplete="no" required maxlength="2" max="13">
                <span class="label">Grade</span>
                <span class="border"></span>
              </label>
            </div>
              

           
            <div class="form-row">
              <label class="form-row-inner">
                <input type="text" name="telephone3" id="telephone_no" class="input-text" required>
                <span class="label">Contact No</span>
                <span class="border"></span>
              </label>
            </div>
            <div class="form-row">
              <label class="form-row-inner">
                <input type="email" name="email3" id="email_address" class="input-text" required>
                <span class="label">Email Address</span>
                <span class="border"></span>
              </label>
            </div>

            <div class="form-row-last">
              <input type="submit" name="squad" class="register" value="" disabled="">
            </div>
          </div>








          <div class="tabcontent" id="member3">
            <div class="form-row">
              <label class="form-row-inner">
                <input type="text" name="firstname4" id="first_name" class="input-text" autocomplete="no" required  >
                <span class="label">First Name</span>
                  <span class="border"></span>
              </label>
            </div>
            <div class="form-row">
              <label class="form-row-inner">
                <input type="text" name="lastname4" id="last_name" class="input-text" autocomplete="no" required>
                <span class="label">Last Name</span>
                  <span class="border"></span>
              </label>
            </div>
<div class="form-row">
              <label class="form-row-inner">
                <select class="input-text" name="gender4" style="padding: 5px; margin-left: 18px;" required>

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
                <input type="date" name="birthday4" id="last_name" class="input-text" autocomplete="no" required style="padding: 30px; padding-left: 5px; padding-bottom: 5px; margin-left: 18px;">
                <span class="label">Birthday</span>
                  <span class="border"></span>
              </label>
            </div>
 <div class="form-row">
              <label class="form-row-inner">
                <input type="number" name="grade4" id="grade" class="input-text" autocomplete="no" required maxlength="2" max="13">
                <span class="label">Grade</span>
                <span class="border"></span>
              </label>
            </div>
              

           
            <div class="form-row">
              <label class="form-row-inner">
                <input type="text" name="telephone4" id="telephone_no" class="input-text" required>
                <span class="label">Contact No</span>
                <span class="border"></span>
              </label>
            </div>
            <div class="form-row">
              <label class="form-row-inner">
                <input type="email" name="email4" id="email_address" class="input-text" required>
                <span class="label">Email Address</span>
                <span class="border"></span>
              </label>
            </div>

            <div class="form-row-last">
              <input type="submit" name="squad" class="register" value="Submit">
            </div>
          </div>








          

        </form>


<?php 


include 'include/connection.php';

$firstname1  = "";
$lastname1 = "";
$gender1 = "";
$birthday1 = "";
$grade1  = "";
$telephone1  = "";
$email1  ="";


$firstname2  = "";
$lastname2 = "";
$gender2 = "";
$birthday2 = "";
$grade2  = "";
$telephone2  = "";
$email2  ="";


$firstname3  = "";
$lastname3 = "";
$gender3 = "";
$birthday3 = "";
$grade3  = "";
$telephone3  = "";
$email3  ="";

$firstname4  = "";
$lastname4 = "";
$gender4 = "";
$birthday4 = "";
$grade4  = "";
$telephone4  = "";
$email4  ="";


$school  = $_SESSION['schoolname'];
$errors =array();

if (isset($_POST['squad'])) {
  
$firstname1  = $_POST['firstname1'];
$lastname1 = $_POST['lastname1'];
$gender1 = $_POST['gender1'];
$birthday1 = $_POST['birthday1'];
$grade1  = $_POST['grade1'];
$telephone1  = $_POST['telephone1'];
$email1  = $_POST['email1'];

$firstname2  = $_POST['firstname2'];
$lastname2 = $_POST['lastname2'];
$gender2 = $_POST['gender2'];
$birthday2 = $_POST['birthday2'];
$grade2  = $_POST['grade2'];
$telephone2  = $_POST['telephone2'];
$email2  = $_POST['email2'];


$firstname3  = $_POST['firstname3'];
$lastname3 = $_POST['lastname3'];
$gender3 = $_POST['gender3'];
$birthday3 = $_POST['birthday3'];
$grade3  = $_POST['grade3'];
$telephone3  = $_POST['telephone3'];
$email3  = $_POST['email3'];

$firstname4  = $_POST['firstname4'];
$lastname4 = $_POST['lastname4'];
$gender4 = $_POST['gender4'];
$birthday4 = $_POST['birthday4'];
$grade4  = $_POST['grade4'];
$telephone4  = $_POST['telephone4'];
$email4  = $_POST['email4'];



  
if(count($errors) == 0) {
   
  
$query = "SELECT * FROM squad WHERE school='{$school}'";
  $result = mysqli_query($db, $query);
  if(mysqli_num_rows($result) == 1) {
    array_push($errors, "User Name Is Already Taken");
      
    }

if(count($errors) == 0) {

    $sql =  "INSERT INTO `squad`(`id`, `school`, `firstname1`, `lastname1`, `gender1`, `birthday1`, `grade1`, `telephone1`, `email1`, `firstname2`, `lastname2`, `gender2`, `birthday2`, `grade2`, `telephone2`, `email2`, `firstname3`, `lastname3`, `gender3`, `birthday3`, `grade3`, `telephone3`, `email3`, `firstname4`, `lastname4`, `gender4`, `birthday4`, `grade4`, `telephone4`, `email4`) VALUES (NULL,'{$school}','{$firstname1}','{$lastname1}', '{$gender1}', '{$birthday1}', '{$grade1}', '{$telephone1}', '{$email1}','{$firstname2}','{$lastname2}', '{$gender2}', '{$birthday2}', '{$grade2}', '{$telephone2}', '{$email2}','{$firstname3}','{$lastname3}', '{$gender3}', '{$birthday3}', '{$grade3}', '{$telephone3}', '{$email3}','{$firstname4}','{$lastname4}', '{$gender4}', '{$birthday4}', '{$grade4}', '{$telephone4}', '{$email4}')";
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
