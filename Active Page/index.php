<?php 
 // print_r($_SERVER['PHP_SELF']);  
 $explode = explode('/',$_SERVER['PHP_SELF']);
 // print_r($explode);

 $link =end($explode);
//  echo $link;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <li class=" <?= ($link == 'index.php') ?'active-page' : '' ?>">
            <a href="../../index.php" target="blank" class="active"><i class="material-icons-two-tone">web</i>Web Site</a>
        </li>
</body>
</html>