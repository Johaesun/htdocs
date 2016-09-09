<?php
session_start();
$_SESSION["name"]=$_POST["name"];
$_SESSION["level"]=$_POST["level"];
if(isset($_POST["id"])){
    $_SESSION["name"]=$_POST["name"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <from action="cofirmview.php" method="post" name="confirm1">
        
        <?php
        print "이름:";
        print $_POST["name"];
        print "등급:";
        print $_POST["level"];
        ?>
        <input type="submit" value="확인" name="comfirm">
        <input type="submit" value="돌아가기" name="back">
    </from>
</body>
</html>