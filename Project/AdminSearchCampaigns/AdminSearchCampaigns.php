<?php
include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="AdminSearchCampaigns.css">
<title>Admin Search Campaign Page</title>
</head>

<body>
<header> 
<button id="btn">← Back</button>
<h2>NeedSurveyResponses</h2>
</header>

<section>
<div id="searchBox">
    <input type="text" placeholder="Search by Survey ID">
</div>
<div id="layout">
    <div id="left">
        <div id="box">
            <h3>Surveys</h3>
            <div id="surveyItem">
                <b>Survey ID:</b> 101<br>
                <span id="meta">Status: Open</span><br>
                <span id="meta">Responses: 4 / 10</span><br>
                <span id="meta">Date: 13/03/25</span>
            </div>
            <div id="surveyItem">
                <b>Survey ID:</b> 102<br>
                <span id="meta">Status: Closed</span><br>
                <span id="meta">Responses: 10 / 10</span><br>
                <span id="meta">Date: 10/03/25</span>
            </div>
            <div id="surveyItem">
                <b>Survey ID:</b> 103<br>
                <span id="meta">Status: Closed</span><br>
                <span id="meta">Responses: 8 / 8</span><br>
                <span id="meta">Date: 08/03/25</span>
            </div>
                <div id="surveyItem">
                <b>Survey ID:</b> 105<br>
                <span id="meta">Status: Closed</span><br>
                <span id="meta">Responses: 6 / 10</span><br>
                <span id="meta">Date: 31/01/25</span>
            </div>
        </div>
    </div>
    <div id="right">
        <div id="box">
            <h3>Transactions</h3>
            <div id="transactionItem">
                User ID: 112<br>
                Survey ID: 101<br>
                Credits: +1
            </div>
            <div id="transactionItem">
                User ID: 117<br>
                Survey ID: 101<br>
                Credits: +1
            </div>
            <div id="transactionItem">
                User ID: 109<br>
                Survey ID: 101<br>
                Credits: +1
            </div>
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
