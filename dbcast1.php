<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    /*//mysql함수
    $con=mysql_connec   t('localhost','root','') or die('접속권한이 없습니다.');
    print "접속에 성공하였습니다.";
    mysql_select_db('php');
    mysql_close($con);*/
    
    /*$mysqli=new mysqli('localhost','root','','php');
    if($mysqli->connect_error){
        die('돌아가');
    }
    print "접속성공";
    $mysqli->close();*/
    
    $pdo= new PDO('mysql:host=localhost;dbname=php;charset=utf8','root','');
    print '접속성공';
    $pdo=null;
    ?>    
</body>
</html>