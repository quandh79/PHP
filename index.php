<?php
$x = 20;
$menu =[
        "lau",
    "vit",
    "bo"

]

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include ("head.php");?>
</head>
<body>
    <h1>Hello world!</h1>
    <h2>So luong sinh vien: <?php echo $x+5;//viet duoc code php?></h2>
    <?php if ($x >=20): ?>
            <h3>Lop dong<?php echo $x;?></h3>
    <?php else:?>
        <h3>Lop vang <?php echo $x;?></h3>
    <?php endif ?>
<h2>Danh sach mon an:</h2>
<ul>
    <?php foreach ($menu as $item):?>
    <li><?php echo $item;?></li>
    <?php endforeach;?>
    <?php include ("footer.php");?>
</ul>
</body>
</html>
