<?php
include "db.php";

function avu_get_user($uid)
{
    global $conn;
    return mysqli_query($conn, "SELECT * FROM users WHERE id = $uid");
}

function avu_get_profile($uid)
{
    global $conn;
    return mysqli_query($conn, "SELECT * FROM profiles WHERE user_id = $uid");
}

function avu_get_campaigns($uid)
{
    global $conn;
    return mysqli_query($conn, "SELECT * FROM campaigns WHERE user_id = $uid");
}

function avu_delete_user($uid)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM sessions WHERE user_id = $uid");
    mysqli_query($conn, "DELETE FROM campaigns WHERE user_id = $uid");
    mysqli_query($conn, "DELETE FROM profiles WHERE user_id = $uid");
    mysqli_query($conn, "DELETE FROM users WHERE id = $uid");
}

function avu_add_credits($uid, $amount)
{
    global $conn;
    mysqli_query($conn,
        "UPDATE profiles SET credits = credits + $amount WHERE user_id = $uid"
    );
    mysqli_query($conn,
        "INSERT INTO ledger (sender_id, receiver_id, amount)
         VALUES (NULL, $uid, $amount)"
    );
}

function avu_remove_credits($uid, $amount)
{
    global $conn;
    mysqli_query($conn,
        "UPDATE profiles SET credits = credits - $amount WHERE user_id = $uid"
    );
    mysqli_query($conn,
        "INSERT INTO ledger (sender_id, receiver_id, amount)
         VALUES ($uid, NULL, $amount)"
    );
}
