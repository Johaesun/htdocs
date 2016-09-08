<?php
$birth=$_POST["birth"];
if(isset($birth)){
    print "너생일 is ".$birth;
}else{
    print "생일선택해라";
}
?>