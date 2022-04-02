
<?php

$id= -1;
$title = "";
$content = "";
if(isset($_POST['id']) && isset($_POST['title']) && isset($_POST['content'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

</head>
<body class="update-body">
    <form class="update-form" action="updateinmysql.php" method="post">
        <h2 class="update-heading">Update note</h2>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <br>
        
        <legend class="update-legend">enter new title</legend>
        <input class="update-input" type="text" name="title" value="<?php echo $title; ?>">
        <br>
        <legend class="update-legend">update content</legend>
        <input class="update-input" type="text" name="content" value="<?php echo $content; ?>">
        <br>
        <button class="update-button" type="submit">
            Update
        </button> 
    </form>
</body>
</html>