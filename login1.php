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
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $sql = "INSERT INTO `form`(`email`, `pass`, `username`) VALUES ('$email','$pass','$name')";
        if ($conn->query($sql) === TRUE) {
            echo "Registerd Successfully <br> <a href='test.php'>Login Now</a>";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          };
        
}
};





?>
