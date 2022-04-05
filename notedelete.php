<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

<?php
    include 'conn.php';
    if($success == true){
    
        
    
        if(isset($_POST['delid'])){
            $id = $_POST['delid'];
            $sql3 = "SELECT * FROM `notes` WHERE id = '$id'";
            $result = $conn->query($sql3);
                if($result->num_rows > 0){
                    $row = $result->fetch_assoc();
                    $user = $row['userid'];
                    $email =  $_COOKIE['email'];
                    $sql2 = "SELECT * FROM `form` WHERE email = '$email'";
                    $result = $conn->query($sql2);
                    if($result->num_rows > 0){
                        $row = $result->fetch_assoc();
                        $currentUser = $row['id'];
                        if($user == $currentUser){

                            $sql = "DELETE FROM `notes` WHERE id='$id' ";
                            if ($conn->query($sql) === TRUE) {
                                ?>
                               <h2 class="delete-head">Note deleted successfully <br> redirecting to homepage in 3 seconds</h2> <?php 
                                ?> <script>
                                function pageRedirect() {
                                    window.location.replace("allnotes.php");
                                }      
                                setTimeout("pageRedirect()", 2500);
                            </script> <?php
                            } else {
                                echo "Error deleting record: " . $conn->error;
                            }
                        }
                        else{
                            echo "you dont have notes with that id";
                        }


                    }
    }
    else{
        echo "no rows with id";
    }
    } 
        else{
            echo "error";
            echo $_POST['delid'];
        }
    }
    else{
        echo "no success";
    }


    

?>