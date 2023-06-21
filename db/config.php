<?php
ob_start();

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DB", "restaurant");

$con = new mysqli(HOST, USER, PASSWORD, DB);

function selectTable($table, $id)
{
    global $con;
    $sql = "SELECT * FROM $table WHERE id = $id";
    $result = $con->query($sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function selectByColumn($table, $column, $id)
{
    global $con;
    $sql = "SELECT * FROM $table WHERE $column = $id";
    $result = $con->query($sql);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $data;
}


