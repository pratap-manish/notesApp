<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

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
      setTimeout("pageRedirect()", 2500);</script>
       
      <?php    

       }
       else{

       
        $select = "SELECT * FROM `form` WHERE email = '$email'";
        $result = $conn->query($select);
          if ($result->num_rows > 0) {
          exit(' <h2 class="main-head" style="text-align:center;">This email is already registered</h2>
          <button style="position:relative;transform:translate(-50%,0);left:50%;padding:0;margin-top:2rem;"><a style="text-decoration:none;font-size:1.8rem;margin:0 auto;padding:1rem;background-color:#6DBAF2;border-radius:1rem;color:white;" href="signup.php">Sign up Again</a></button>
           
          ');
          ?>
           <h2 class="main-head" style="text-align:center;">username or password incorrect</h2>
        <button style="position:relative;transform:translate(-50%,0);left:50%;padding:0;margin-top:2rem;"><a style="text-decoration:none;font-size:1.8rem;margin:0 auto;padding:1rem;background-color:#6DBAF2;border-radius:1rem;color:white;" href="login.php">Login Again</a></button>
         
         <?php
          }
          else{
            $sql = "INSERT INTO `form`(`email`, `pass`, `username`) VALUES ('$email','$pass','$name')";
                if ($conn->query($sql) === TRUE) {
                  ?> <script> window.alert("registered successfully") 
                window.location.href="login.php";
                </script><?php
                    // echo "Registerd Successfully <br> <a href='test.php'>Login Now</a>";
                  } 
          }
        }
  }
}
?>