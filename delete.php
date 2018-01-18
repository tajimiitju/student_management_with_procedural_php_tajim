<?php


$db = new PDO('mysql:host=localhost;dbname=php-63;charset=utf8mb4', 'root', '');
$query = "DELETE FROM `php-63`.`user_info` WHERE `user_info`.`id` = ".$_GET['id'];
$stmt = $db->exec($query);

if($stmt){
    header('location: all_data.php');
}

