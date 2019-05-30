<?php
  session_start();
    include_once ('.././lib/DataProvider.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thân nhân</title>
    <link rel="stylesheet" href=".././CSS/style.css" type="text/css">
</head>
<body>
<div class="container">
    <div class="header">
        <?php include ('../USer/modulesUser/mHeaderUser.php'); ?>
        <?php include ('../User/modulesUser/mContentUser.php'); ?>
    </div>
    <br>
    <div class="footer">
       
                <?php include ("../modules/mFooter.php"); ?>             
    </div>
</div>

</body>
</html>