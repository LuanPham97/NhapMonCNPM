<?php 
    include_once ('../lib/DataProvider.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="./CSS/style.css" type="text/css">
</head>
<body>
<div class="Container">
    <div class="Header">
        <?php include ('Modules/mHeader.php'); ?>
    </div>
    <div class="Menu">
        <?php include ('Modules/mMenu.php'); ?>
    </div>
    <div class="Content">
        <?php include ('Modules/mContent.php'); ?>
    </div>
    <div class="Footer">
        <?php include ('Modules/mFooter.php'); ?>             
    </div>
</div>


</body>
</html>