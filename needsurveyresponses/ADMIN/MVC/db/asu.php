<?php
include "db.php";

function getAllUsers()
{
    global $conn;
    return mysqli_query($conn, "SELECT * FROM users");
}

function getUserById($uid)
{
    global $conn;
    return mysqli_query($conn, "SELECT * FROM users WHERE id = $uid");
}
