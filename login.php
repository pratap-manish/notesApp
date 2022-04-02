<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="firstdb";
$success = false;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
    $success = true;
}

if($success==true){
    if(isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['email'])){

      $name = $_POST['username'];
      // $words = '     my words     ';
      $name = trim($name);

        $len = strlen($name);
        $email = $_POST['email'];
        $pass = $_POST['pass'];
       if($len == 0){
         echo "enter valid username <br> redirecting to signup page in 3 2 1";
        ?> <script> function pageRedirect() {
          window.location.replace("signup.php");
      }      
      setTimeout("pageRedirect()", 3500);</script>
       
      <?php    

       }
       else{

       
        $select = "SELECT * FROM `form` WHERE email = '$email'";
        $result = $conn->query($select);
          if ($result->num_rows > 0) {
          exit('This email already registered');
          }
          else{

            $sql = "INSERT INTO `form`(`email`, `pass`, `username`) VALUES ('$email','$pass','$name')";
                if ($conn->query($sql) === TRUE) {
                  ?> <script> window.alert("registered successfully") </script><?php
                    // echo "Registerd Successfully <br> <a href='test.php'>Login Now</a>";
                  } 
          }
        }
  }
}





?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <section class="vh-100">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
                     <div class="col-md-9 col-lg-6 col-xl-5">
            <img
              src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
              class="img-fluid"
              alt="Sample image"
            />
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">






            <form method="POST" action="match.php">
              <div
                class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start"
              >
                <p class="lead fw-normal mb-0 me-3">Sign in</p>
                <!-- <button type="button" class="btn btn-primary btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-primary btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-primary btn-floating mx-1">
                  <i class="fab fa-linkedin-in"></i>
                </button> -->
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input
                  type="text"
                  id="form3Example3"
                  class="form-control form-control-lg"
                  placeholder="Enter a valid email address"
                  name="username"
                />
                <label class="form-label" for="form3Example3"
                  >Username</label
                >
              </div>

              <!-- Password input -->
              <div class="form-outline mb-3">
                <input
                  type="password"
                  id="form3Example4"
                  class="form-control form-control-lg"
                  placeholder="Enter password"
                  name="pass"
                />
                <label class="form-label" for="form3Example4">Password</label>
              </div>

              <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                  <input
                    class="form-check-input me-2"
                    type="checkbox"
                    value=""
                    id="form2Example3"
                  />
                  <label class="form-check-label" for="form2Example3">
                    Remember me
                  </label>
                </div>
                <a href="#!" class="text-body">Forgot password?</a>
              </div>

              <div class="text-center text-lg-start mt-4 pt-2">
                <button
                  type="submit"
                  class="btn btn-primary btn-lg"
                  style="padding-left: 2.5rem; padding-right: 2.5rem"
                >
                  Sign in
                </button>
                <p class="small fw-bold mt-2 pt-1 mb-0">
                  Don't have an account?
                  <a href="#!" class="link-danger">Register</a>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div
        class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary"
      >
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
          Copyright © 2020. All rights reserved.
        </div>
        <!-- Copyright -->

        <!-- Right -->
        <div>
          <a href="#!" class="text-white me-4">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#!" class="text-white me-4">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#!" class="text-white me-4">
            <i class="fab fa-google"></i>
          </a>
          <a href="#!" class="text-white">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>
        <!-- Right -->
      </div>
    </section>

    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"
    ></script>
  </body>
</html>