<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $year=$_POST["year"];
    if(isset($year)){
        print "너생일 is ".$year;
    }else{
        print "생일선택해라";
    }
?>
</body>
</html>