<?php

include 'conn.php';
if(isset($_POST['id']) && isset($_POST['title']) && isset($_POST['content'])){
    $email = $_COOKIE['email'];
    $sql2 = "SELECT * FROM `form` WHERE email = '$email'";
    $result = $conn->query($sql2);
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $currentUser = $row['id'];

    
    $id = $_POST['id'];
    $title=$_POST['title'];
    $content=$_POST['content'];
    $sql3 = "SELECT * FROM `notes` WHERE id = '$id'";
    $result = $conn->query($sql3);
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $userid = $row['userid'];
        if($userid == $currentUser){

    $sql = "UPDATE `notes` SET `title`='$title', `content`='$content' WHERE id='$id' ";
    if ($conn->query($sql) === TRUE){
    echo "note updated";
    ?><script>
            window.alert("note updated")
          window.location.replace("allnotes.php");
          
    </script> <?php
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
        
    }
        }
        else{
            echo "you cant update";
        }
    }
    else{
        echo "no notes found with this id";
    }

}
else{
    echo "user not logged in";
}
    }
    else{
        echo "erro";
    }

?>