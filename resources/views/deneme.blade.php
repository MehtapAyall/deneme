<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="GET"> 
    <textarea name="al" cols="30" rows="10" ></textarea>
    <button type="submit" value="Gönder"> </button>
</form>


<?php

    if($_GET){

    $deger=$_GET['al'];
    $sonuc = str_word_count($deger);
    if((int)$sonuc > 5)
    echo "büyük";
    else
    echo "tamam";
    }
?> 

</body>
</html>