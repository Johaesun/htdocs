<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    print $_POST["onname"]."님 환영합니다<br>";
    print $_POST["onname"]."님의 ID는 ".$_POST["Id"]."이며<br> PW는 ".$_POST["Pw"]."입니다.<br>";
    print nl2br($_POST["honbun"]);
    
    if(isset($_POST["hobby"])){
        $hobby=implode('와',$_POST["hobby"]);
        print "저의 취미는".$hobby."입니다";
    }else{
        print "넌 취미따위 없는 불쌍한 아이구나.";
    }
?>
</body>
</html>