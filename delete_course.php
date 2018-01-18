<?php


$db = new PDO('mysql:host=localhost;dbname=php-63;charset=utf8mb4', 'root', '');
$query = "DELETE FROM `php-63`.`course` WHERE `course`.`id` = ".$_GET['id'];
$stmt = $db->exec($query);

if($stmt){
    header('location: all_course.php');
}

