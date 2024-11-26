<?php 

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","root");

$sql = "insert into contactform (name,mail,age,comments) values (?,?,?,?)";
$stml = $pdo->prepare($sql);

$stml->bindValue(1,$_POST['name']);
$stml->bindValue(2,$_POST['mail']);
$stml->bindValue(3,$_POST['age']);
$stml->bindValue(4,$_POST['comments']);

$stml->execute();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問合せフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <h1>お問合せ内容確認</h1>
    
    <div class="confirm">
        <p>
            お問合せ有難うございました。<br>３営業日以内に担当者よりご連絡差し上げます。
        </p>
    </div>
</body>
</html>