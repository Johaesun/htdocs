 <?php
   /* phpinfo();*/
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>혜선님이시다~!</title>
    <style>
        ._99{background: pink;}
        .one{color:blue;}
        .two{color:red;}
    </style>
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
    <li><?php
        $data="안뇽";
        $num=4;
        print $data;
        print $num;
       ?>
       </li>
       
    <li>
    <?php
    $week[]="월";
    $week[]="월";
    //위의 코드와 같은 의미입니다.
    $week[0]="월";
    $weep[1]="화";
    print $week[0];
    print $week[1];
        
        /*array 함수 사용하기*/
        //5.4이상부터 사용가능
        $month=array(18,18,18,18,18,18,"신발");
        $year=[2016,2017];
        
        //배열초기호ㅏ
        $month=array();
        
        //연관배열
        $member["name"]="꽉일촌";
        $member["age"]=3;
        $member["height"]=150;
        print $member["age"];
        print "<pre>";
        print_r ($member);
        
        //for문
        
        ?>
        
    </li>
    </ul> 
    
    <p class="_99">
    <?php
    for($i=1;$i<10;$i++){
            print "<br>";
        if($i%2!=1){
        for($j=1;$j<10;$j++){
            print "<span class='one'>".$i."X".$j."=".$i*$j."<br></span>";
                }
        }
        else{
            for($j=1;$j<10;$j++){
            print "<span class='two'>".$i."X".$j."=".$i*$j."<br></span>";
                }
            }   
        }
      ?>
      </p>
    <?php
    $a=array('월','화','수','목','금','토','일');
    foreach ($a as $key)
    print $key;
    print "<br>";
    ?>
</body>
</html>