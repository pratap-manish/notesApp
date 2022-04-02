<?php

// include 'conn.php';

// if($success ==true){
//     if(isset($_POST['title']) && isset($_POST['content'])){
//         $title = $_POST['title'];
//         $content = $_POST['content'];
//     $email = $_COOKIE['email'];
//     $sql = "SELECT * FROM `form` WHERE email = '$email'";
//     $result = $conn->query($sql);
//     if ($result->num_rows > 0) {
//             $row = $result->fetch_assoc();
//             $userid = $row['id'];
//         $sql2 = "INSERT INTO `notes`(`title`, `content`, `userid`) VALUES ('$title','$content','$userid')";
//         if ($conn->query($sql2) === TRUE) {
//             // echo "Note created successfully <br>  
//             // <a href='allnotes.php'>show all notes</a>
//             // "
//             ;
//           } else {
//             echo "Error: " . $sql2 . "<br>" . $conn->error;
//           };
//     }
// }
// else{
//     echo "Register first";
// }
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Notes</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php

include 'conn.php';

$email = $_COOKIE['email'];
    $sql = "SELECT * FROM `form` WHERE email = '$email'";
    $result = $conn->query($sql);
        if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $userid = $row['id'];
                $name = $row['username'];
        $sql2 = "SELECT * FROM `notes` WHERE userid = '$userid'";
        $result = $conn->query($sql2);
        if ($result->num_rows > 0) {
            // $row = $result->fetch_assoc();
            ?><div class="main-div"><?php
            echo "<h2> Hi ".$name. " </h2>";

            ?> <h1 class="pri-head">Your Notes</h1> </div> <?php

            while($row2 = $result->fetch_assoc()){
                // echo "<h2> ".$row2['title']. "</h2> <br>";
                ?>
                <!-- <div class="notes"> -->
                <div class="note-div">
                    <div class="note-main">
                <h1 class="main-head"> <?php echo $row2['title']  ?> </h1>
                <p class="para"> <?php echo $row2['content']  ?> </p>
                </div>
                <div class="grid">
                    <!-- <div></div> -->
                    <form action="delete.php" method="post">
                        <input type="hidden" name="delid" value="<?php echo $row2['id']; ?>" >
                        <button class="delete" type="submit">Delete Note</button>
                    </form>
                    <form action="update.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row2['id']; ?>" >
                        <input type="hidden" name="title" value="<?php echo $row2['title']; ?>">
                        <input type="hidden" name="content" value="<?php echo $row2['content']; ?>">
                        <button class="edit"  type="submit" >Edit note</button> 
                    </form>
                </div>
                </div>
                <!-- </div> -->
                
                <!-- <p> By <?php echo $row['username']  ?> </p> -->
                <?php                
            }
        }
    }
    ?><form action="logout.php" method="post">
        
        <button type=submit class="logout">Logout</button>
    </form> 
    <form action="notesactual.php">

        <button type=submit class="create-note">Create new note</button>
    </form>
</body>
</html>


