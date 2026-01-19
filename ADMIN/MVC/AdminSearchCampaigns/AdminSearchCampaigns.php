<?php
include "../db/asc.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["delete_campaign"])) {
    deleteCampaign($_POST["delete_campaign"]);
}

$title = $_GET['title'] ?? null;

$result  = getCampaigns($title);
$result1 = getLedger();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="AdminSearchCampaigns.css">
<title>Admin Search Campaign Page</title>
</head>

<body>
<header> 
<a href="../AdminPage/adminpage.php">
    <button id="btn">← Back</button>
</a>
<h2>NeedSurveyResponses</h2>
</header>

<section>
<div id="searchBox">
    <form method="get">
            <input type="text" name="title" placeholder="Search by Survey Name">
    </form>
</div>
<div id="layout">
    <div id="left">
        <div id="box">
            <h3>Surveys</h3>
            <?php
            while ($row = mysqli_fetch_assoc($result)) 
            {
                echo '<div id="surveyItem">';
                echo '<b>' . $row['title'] . '</b><br>';
                echo '<span id="meta">Survey ID: ' . $row['id'] . '</span><br>';
                echo '<span id="meta">Status: ' . $row['status'] . '</span><br>';
                echo '<span id="meta">Responses: ' . $row['responses_served'] . ' / ' . $row['responses_needed'] . '</span><br>';
                echo '<span id="meta">Date: ' . $row['created_at'] . '</span>';
                echo '<form method="post">';
                echo '<button style="background: #e74c3c; color: white; border: none; padding: 6px 10px; border-radius: 4px; cursor: pointer; font-size: 12px; margin-top: 6px;" name="delete_campaign" value="' . $row['id'] . '">Delete Survey</button>';
                echo '</form>';
                echo '</div>';
            }
            if (mysqli_num_rows($result) == 0)
            {
                echo '<span id="meta">No surveys found</span>';
            }
            ?> 
        </div>
    </div>
    <div id="right">
        <div id="box">
            <h3>Transactions</h3>
            <?php
            while ($t = mysqli_fetch_assoc($result1)) 
            {
                echo '<div id="transactionItem">';
                if ($t['sender_id'] == NULL) 
                {
                    echo 'System → User ' . $t['receiver_id'] . '<br>';
                } 
                else if ($t['receiver_id'] == NULL)
                {
                    echo 'User ' . $t['sender_id'] . ' spent credits<br>';
                } 
                else 
                {
                    echo 'User ' . $t['sender_id'] . ' → User ' . $t['receiver_id'] . '<br>';
                }
                echo '<span id="meta">Credits:</span> ' . $t['amount'] . '<br>';
                echo '<span id="meta">Date:</span> ' . $t['created_at'];
                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>
</section>

<footer>
Contact us:
<a href="mailto:shamvi.abdullah@gmail.com">click here</a>
</footer>
</body>
</html>
