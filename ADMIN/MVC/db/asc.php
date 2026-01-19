<?php
include "db.php";
function deleteCampaign($cid)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM sessions WHERE campaign_id = $cid");
    mysqli_query($conn, "DELETE FROM campaigns WHERE id = $cid");
}
function getCampaigns($title = null)
{
    global $conn;

    if ($title !== null && $title !== "") {
        return mysqli_query($conn,"SELECT * FROM campaigns WHERE title LIKE '%$title%'");
    }

    return mysqli_query($conn, "SELECT * FROM campaigns");
}
function getLedger()
{
    global $conn;
    return mysqli_query(
        $conn,"SELECT * FROM ledger ORDER BY created_at DESC");
}
