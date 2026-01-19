<?php
include "db.php";

function getProfile($uid)
{
    global $conn;
    return mysqli_query($conn, "SELECT * FROM profiles WHERE user_id = $uid");
}

function transferCredits($sender_id, $receiver_id, $amount)
{
    global $conn;

    mysqli_query($conn,"UPDATE profiles SET credits = credits - $amount WHERE user_id = $sender_id");
    mysqli_query($conn,"UPDATE profiles SET credits = credits + $amount WHERE user_id = $receiver_id");
    mysqli_query($conn,"INSERT INTO ledger (sender_id, receiver_id, amount) VALUES ($sender_id, $receiver_id, $amount)");
}
