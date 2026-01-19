<?php
include "../db/asu.php";
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['uid']) && $_GET['uid'] !== "") {
    $result = getUserById($_GET['uid']);
} else {
    $result = getAllUsers();
}
include "../html/AdminSearchUser.php";
?>