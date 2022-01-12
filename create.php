<?php

include_once 'db.php';

$name = $_POST['name'];
$score = $_POST['score'];

$conn->query("insert into demo_table (name, score) values ('$name', '$score')");

$conn->close();
header("location: index.php");