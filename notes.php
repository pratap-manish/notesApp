<?php

include 'conn.php';

if(isset($_COOKIE['email'])){
    echo $_COOKIE['email'];
    $email = $_COOKIE['email'];
    $sql = "SELECT * FROM `form` WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){

    // $row = $result->fetch_assoc();
    echo " your username is".$row['username']. "<br>";
    }}
else{
    echo "user not found";
}
else{
    echo "login to view page.";

}
?>