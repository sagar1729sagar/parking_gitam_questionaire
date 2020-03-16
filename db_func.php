<?php
date_default_timezone_set('Asia/Kolkata');
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=parking','sagar','sagar');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 ?>
