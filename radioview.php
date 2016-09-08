
    <?php
    $gender=$_POST["gender"];//슈퍼전역변수이시다
        
        if(isset($gender)){
            print "너의 성별은".$gender;
        }else{
            print "성별입력해라";
        }
    ?>