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
if($success == true){
if(isset($_POST['username']) && isset($_POST['pass'])){
    $name = $_POST['username'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM `form` WHERE username = '$name' AND pass = '$pass'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            // echo "Welcome ".$row['username']. " your email is ".$row['email']. "<br>" ;
            setcookie('email',$row['email'],time() + (86400*30));
            echo "<script>window.location.href='allnotes.php'</script>";

        }
    }
    else{
        echo "username or password incorrect <br> <a href='login.php'>Login again</a>";
    }


}
else{
    echo "user not registered";
}
}
?>