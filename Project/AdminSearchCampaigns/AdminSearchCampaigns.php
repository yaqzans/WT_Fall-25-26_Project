<?php
include "../db.php";
$result = mysqli_query($conn, "SELECT * FROM campaigns");
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['cid']) && $_GET['cid'] != "") 
{
    $cid = $_GET['cid'];
    $result = mysqli_query($conn, "SELECT * FROM campaigns WHERE id = $cid");
}
$result1 = mysqli_query($conn, "SELECT * FROM ledger ORDER BY created_at DESC");
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
        <input type="text" name="cid" placeholder="Search by Campaign ID">
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
                    echo '<b>Survey ID:</b> ' . $row['id'] . '<br>';
                    echo '<span id="meta">Status: ' . $row['status'] . '</span><br>';
                    echo '<span id="meta">Responses: ' . $row['responses_served'] . ' / ' . $row['responses_needed'] . '</span><br>';
                    echo '<span id="meta">Date: ' . $row['created_at'] . '</span>';
                    echo '<button name="delete_campaign">Delete Survey</button>';
                    echo '</div>';
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
