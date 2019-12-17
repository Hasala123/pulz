<?php 


session_start();


if ($_SESSION['isssubmit'] = 1) {
 
//echo '<script type="text/javascript"> alert("You have remaining 3 vote");</script>';

}else{


$_SESSION = array();


            if (isset($_COOKIE[session_name()])) {


                setcookie(session_name(), '', time()-86400,'/');    

                 }

                session_destroy();

                header('location:index.php');
}


 ?><!DOCTYPE html>
<html  >
<head>

  
  <!-- Site made with Mobirise Website Builder v4.9.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>vote1</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  <style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto auto auto auto auto auto auto;
/*  background-color: black;*/


}

.grid-item {

  text-align: center;
  width: 70px;
  height: 70px;
  border-width: 1px;
  border-color: black;
  background-color: white;
  margin: 1px;
  padding: 5px;
  padding-top: 10px;
}



.grid-item:hover {

  text-align: center;
  width: 70px;
  height: 70px;
  border-width: 1px;
  border-color: black;
  background-color: grey;
  margin: 1px;
  padding: 5px;
  padding-top: 10px;
}
</style>
  
  
  
</head>
<body>
  <section class="mbr-section form3 cid-rv5cFvnRs5" id="form3-9">

    

    

    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="align-center pb-2 mbr-fonts-style display-2">
                    VOTE
                </h2>
                <h3 class="mbr-section-subtitle align-center pb-5 mbr-light mbr-fonts-style display-5">
                    Vote 1
                </h3>
            </div>
        </div>

                <!---Formbuilder Form--->

                <form method="POST" class="mbr-form form-with-styler" >

           
                    <div class="grid-container">
  <button class="grid-item">1</button>
  <button class="grid-item">2</button>
  <button class="grid-item">3</button>  
  <button class="grid-item">4</button>
  <button class="grid-item">5</button>
  <button class="grid-item">6</button>  
  <button class="grid-item">7</button>
  <button class="grid-item">8</button>
  <button class="grid-item">9</button>  
   <button class="grid-item">9</button> 
   <button class="grid-item">1</button>
  <button class="grid-item">2</button>
  <button class="grid-item">3</button>  
  <button class="grid-item">4</button>
  <button class="grid-item">5</button>
  <button class="grid-item">6</button>  
  <button class="grid-item">7</button>
  <button class="grid-item">8</button>
  <button class="grid-item">9</button>  
   <button class="grid-item">9</button> 
   <button class="grid-item">1</button>
  <button class="grid-item">2</button>
  <button class="grid-item">3</button>  
  <button class="grid-item">4</button>
  <button class="grid-item">5</button>
  <button class="grid-item">6</button>  
  <button class="grid-item">7</button>
  <button class="grid-item">8</button>
  <button class="grid-item">9</button>  
   <button class="grid-item">9</button> 
   <button class="grid-item">1</button>
  <button class="grid-item">2</button>
  <button class="grid-item">3</button>  
  <button class="grid-item">4</button>
  <button class="grid-item">5</button>
  <button class="grid-item">6</button>  
  <button class="grid-item">7</button>
  <button class="grid-item">8</button>
  <button class="grid-item">9</button>  
   <button class="grid-item">9</button> 
</div>
 
                            


                </form><!---Formbuilder Form--->

    </div>
</section>


  <section class="engine"></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <!--script src="assets/formoid/formoid.min.js"></script-->
  
  
</body>
</html>