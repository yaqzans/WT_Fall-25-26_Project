<?php
include "../db/asc.php";
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["delete_campaign"])) {
    deleteCampaign($_POST["delete_campaign"]);
}

$title = $_GET['title'] ?? null;

$result  = getCampaigns($title);
$result1 = getLedger();
include "../html/AdminSearchCampaigns.php";
?>
