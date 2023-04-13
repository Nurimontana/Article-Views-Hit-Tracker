<?php
require_once ("connect.php");
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
    <tr style="height: 30px" bgcolor="#990000">
        <td style="color: white">Makale Başlığı </td>
        <td style="color: white;"align="right" >gösterim sayısı</td>
    </tr>
    <?php
    $query  =   $databaseConnection->prepare("SELECT * FROM makaleler");
    $query->    execute();
    $recordCount   =   $query->rowCount();
    $records       =   $query->fetchAll(PDO::FETCH_ASSOC);
    if($recordCount>0){
    foreach ($records as $lines){
        ?>
        <tr style="height: 50px">
            <td align="left"><b><a href="show.php?id=<?php echo $lines["id"] ?> " style="color: black; text-decoration: none"><?php echo $lines["makalebasligi"];?></a></b></td>
            <td align="right"><?php echo $lines["gösterimsayisi"]; ?> </td>
        </tr>
        <?php
    }
    }
    ?>
</table>
<?php
$databaseConnection =   null;
?>
</body>
</html>