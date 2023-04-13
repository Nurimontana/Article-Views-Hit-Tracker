<?php

try {
    $databaseConnection   = new PDO("mysql:host=localhost;dbname=tiklamasayisi;charset=UTF8","root","");
}catch(PDOException $hata){
    echo $hata->getMessage();
    die();
}
?>



