<?php
//echo "<pre>";
//var_dump($_POST);
//echo "</pre>";
$todoName = $_POST['todo_name'] ?? '';
$todoName = trim($todoName);

if ($todoName) {
    $json = file_get_contents('todo.json');
    //turn json into an associative array
    $jsonArray = json_decode($json, true);
    $jsonArray[$todoName] = ['completed' => false];
//    echo "<pre>";
//    var_dump($_POST);
//    echo "</pre>";
    file_put_contents('todo.json', json_encode($jsonArray, JSON_PRETTY_PRINT));
}