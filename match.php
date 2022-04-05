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
        ?>
        <h2 class="main-head" style="text-align:center;">username or password incorrect</h2>
        <button style="position:relative;transform:translate(-50%,0);left:50%;padding:0;margin-top:2rem;"><a style="text-decoration:none;font-size:1.8rem;margin:0 auto;padding:1rem;background-color:#6DBAF2;border-radius:1rem;color:white;" href="login.php">Login Again</a></button>

        <?php
    }


}
else{
    echo "user not registered";
}
}
?>