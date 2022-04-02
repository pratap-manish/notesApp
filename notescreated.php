<?php
include 'conn.php';

if($success ==true){
    if(isset($_POST['title']) && isset($_POST['content'])){
        $title = $_POST['title'];
        $content = $_POST['content'];
    $email = $_COOKIE['email'];
    $sql = "SELECT * FROM `form` WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $userid = $row['id'];
        $sql2 = "INSERT INTO `notes`(`title`, `content`, `userid`) VALUES ('$title','$content','$userid')";
        if ($conn->query($sql2) === TRUE) {
            echo "<script>window.location.href='allnotes.php'</script>";

            // echo "Note created successfully <br>  
            // <a href='allnotes.php'>show all notes</a>
            
            // " ;
          } else {
            echo "Error: " . $sql2 . "<br>" . $conn->error;
          };
    }
}
else{
    echo "Register first";
}
}
?>