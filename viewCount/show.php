<?php
require_once ("connect.php");
$id =$_GET["id"];

$HitUpdate  =    $databaseConnection->prepare("UPDATE makaleler SET gösterimsayisi=gösterimsayisi+1 WHERE id=?");
$HitUpdate->execute([$id]);
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table width="1000" border="0" cellpadding="0" cellspacing="0" align="center">
    <tr style="height: 30px">
        <td align="left"><b>Görüntüleme ve Hit Uygulaması</b></td>
        <td align="right"><a href="index.php" style="text-decoration: none; color: black" >Ana Sayfa</a> </td>
    </tr>
    <tr style="height: 30px">
        <td colspan="2"></td>
    </tr>

    <?php
    $query  =   $databaseConnection->prepare("SELECT * FROM makaleler WHERE id=?");
    $query->    execute([$id]);
    $recordCount   =   $query->rowCount();
    $records       =   $query->fetch(PDO::FETCH_ASSOC);
    if($recordCount>0){

            ?>
           <tr>
               <td colspan="2"><h3 style="color: red; text-align: center"><?php echo $records["makalebasligi"]; ?></h3></td>
           </tr>
        <tr>
            <td colspan="2" style="text-align: center"><?php echo $records["makaleicerigi"]; ?></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center; padding-top: 50px">Bu makale <?php echo $records["gösterimsayisi"]; ?> defa görüntülendi</td>
        </tr>
            <?php

    }else{
        header("location:index.php");
    }
    ?>
</table>
<?php
$databaseConnection =   null;
?>
</body>
</html>