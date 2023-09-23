<?php

$json = file_get_contents('todo.json');
$jsonArray = json_decode($json, true);

$todo = $_POST['todo_name'];
$jsonArray[$todo]['completed'] = !$jsonArray[$todo]['completed'];

file_put_contents("todo.json", json_encode($jsonArray, JSON_PRETTY_PRINT));
header('Location: index.php');
