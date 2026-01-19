<?php
include "db.php";
function getUser($uid)
{
    global $conn;
    return mysqli_query($conn, "SELECT * FROM users WHERE id = $uid");
}

function getProfile($uid)
{
    global $conn;
    return mysqli_query($conn, "SELECT * FROM profiles WHERE user_id = $uid");
}

function getUserCampaigns($uid)
{
    global $conn;
    return mysqli_query($conn, "SELECT * FROM campaigns WHERE user_id = $uid");
}

function deleteCampaign($cid, $uid)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM sessions WHERE campaign_id = $cid");
    mysqli_query($conn, "DELETE FROM campaigns WHERE id = $cid AND user_id = $uid");
}

function deleteUser($uid)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM sessions WHERE user_id = $uid");
    mysqli_query($conn, "DELETE FROM campaigns WHERE user_id = $uid");
    mysqli_query($conn, "DELETE FROM profiles WHERE user_id = $uid");
    mysqli_query($conn, "DELETE FROM users WHERE id = $uid");
}

function updateEmail($uid, $email)
{
    global $conn;
    mysqli_query($conn, "UPDATE users SET email = '$email' WHERE id = $uid");
}

function updatePassword($uid, $hash)
{
    global $conn;
    mysqli_query($conn, "UPDATE users SET password = '$hash' WHERE id = $uid");
}
