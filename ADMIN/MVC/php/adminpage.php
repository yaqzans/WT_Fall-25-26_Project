<?php
include "../db/ap.php";
$total_users     = getTotalUsers();
$total_campaigns = getTotalCampaigns();
include "../html/adminpage.php";
?>