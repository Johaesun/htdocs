<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <?php
    $search='%'.$_POST["search"].'%';
    include 'kccdb.php';
    $sql="select * from member where last_name LIKE :last_name or first_name LIKE :first_name";
    $protect=$pdo->prepare($sql);//sql의 보안성을 키워줌
    $protect->bindValue(':last_name',$search,PDO::PARAM_STR);
    $protect->bindValue(':first_name',$search,PDO::PARAM_STR);
    $protect->execute();
    $count=$protect->rowcount();
    print $count."건입니다";
    ?>  
</body>
</html>