<?php
include_once 'db.php';

$id = $_GET['id'];
$conn->query("delete from demo_table where id = '$id'");
$conn->close();

header('location: index.php');