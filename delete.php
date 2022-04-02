

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include 'conn.php';

$delid = -1 ;
if(isset($_POST['delid'])){
    $delid = $_POST['delid'];
}

$email = $_COOKIE['email'];
$sql = "SELECT * FROM `form` WHERE email = '$email'";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $userid = $row['id'];
    $sql2 = "SELECT * FROM `notes` WHERE userid = '$userid' AND id = '$delid' ";
    $result = $conn->query($sql2);

    if ($result->num_rows > 0) {
        while($row2 = $result->fetch_assoc()){
            // echo "<h2> ".$row2['title']. "</h2> <br>";
            ?>
    <form method="POST" action="notedelete.php">
        <input type="hidden" name="delid" value="<?php echo $delid ?>">
        <h2>Note <?php echo $row2['title']; ?> will be deleted</h2>
        <br>
        <button type="submit" >Confirm delete</button>
    </form>

    <?php } } }?>
</body>
</html>