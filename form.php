<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="view.php" method="post" name="form">
    이름: 
    <input type="text" name="onname"><br>
    
    ID:
    <input type="text" name="Id"><br>
    
    PW:
    <input type="password" name="Pw"><br>
    
    <textarea name="honbun" cols="30" rows="5">
        
    </textarea><br>
    
    나의 취미
    <input type="checkbox" name="hobby[]" value="sport">
    스포츠<br>
    
    <input type="checkbox" name="hobby[]" value="movie">
    영화감상<br>
    
    <input type="checkbox" name="hobby[]" value="book">
    독서<br>
    
    <input type="submit" value="송신">
</form>
</body>
</html>
