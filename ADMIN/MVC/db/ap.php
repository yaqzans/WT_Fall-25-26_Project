<?php
include "db.php";
function getTotalUsers()
{
    global $conn;
    $res = mysqli_query($conn, "SELECT COUNT(*) AS total FROM users");
    $row = mysqli_fetch_assoc($res);
    return $row['total'];
}

function getTotalCampaigns()
{
    global $conn;
    $res = mysqli_query($conn, "SELECT COUNT(*) AS total FROM campaigns");
    $row = mysqli_fetch_assoc($res);
    return $row['total'];
}

?>