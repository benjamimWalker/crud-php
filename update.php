<?php
include_once 'db.php';

$name = $_POST['name'];
$score = $_POST['score'];
$id = $_POST['id'];

$conn->query("update demo_table set name = '$name', score = '$score' where id = '$id'");
$conn->close();

header('location: index.php');