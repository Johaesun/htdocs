 <?php
   /* phpinfo();*/
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>혜선님이시다~!</title>
</head>
<body>
<h1>10!15!</h1>
<ul>
    <li>룰</li>
    <li>루</li>
    
<?php
    print "안녕이시당 혜선님이시당 10월 15일 생일이시당 숭구리당당 숭당당";
    ?>
    
    <li>php 버전은 ?
        <?php
            print PHP_VERSION;
        ?>
    </li>
    <li>php 운영체제는 ?
    <?php
            print PHP_OS;
        ?>
    </li>
    <li><?php
        define("HELLO","방가방가시다");
        print HELLO."<br>";
        
        print __DIR__;
        ?></li>
</ul>    
</body>
</html>