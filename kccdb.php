<?php
try{
    $pdo= new PDO('mysql:host=localhost;dbname=kcc;charset=utf8','root','');
    print '접속성공';
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    }
    catch(PDOException $Exception){
        die("접속오류".$Exception->getMessage());
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
</body>
</html>