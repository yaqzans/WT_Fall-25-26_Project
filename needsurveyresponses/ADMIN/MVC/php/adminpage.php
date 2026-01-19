<?php
include "../db/ap.php";
$total_users     = getTotalUsers();
$total_campaigns = getTotalCampaigns();
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["post_announcement"])) {
    if (!empty($_POST["announcement"])) {
        mysqli_query($conn, "DELETE FROM announcement");
        mysqli_query($conn, "INSERT INTO announcement (message) VALUES ('{$_POST["announcement"]}')");
    }
}
include "../html/adminpage.php";
?>