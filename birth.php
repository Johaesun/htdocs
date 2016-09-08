<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        option{color:#000;}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body>
    <form name="select" action="birthview.php" method="post">
        <select name="birth" id="">
            <option value="none" selected>생일이언제냐</option>
            
        </select>
        <input type="submit" value="송신">
    </form>
    <script>
            for(var $a=1900; $a<=2016; $a++){
                $("select").append("<option value='"+$a+"'>"+$a+"</option>");
            }
            </script>
</body>
</html>