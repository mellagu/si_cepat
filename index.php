<?php
    session_start();
    require 'koneksi/conn.php';
    require 'function/load-function.php';
?>
<!DOCTYPE html>
<html lang="eng">
    <?php include 'view/template/kepala.php'?>
    <body>
        <?php include 'view/template/header.php'?>
        <?php include 'view/template/content.php'?>
        <?php include 'view/template/footer.php'?>
        <?php include 'view/template/script.php'?>
    </body>
</html>
