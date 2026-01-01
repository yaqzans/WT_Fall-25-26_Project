<?php
include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="adminpage.css">
<title>Admin Page</title>
</head>

<body>
<header> 
<button id="btn">← Back</button>
<h2>NeedSurveyResponses</h2>
</header>

<section>
<div id="row">
    <div id="box">
        <h3>Userbase</h3>
        <p>Total Users: 128</p>
        <button id="btncol">See More</button>
    </div>
    <div id="box">
        <h3>Campaigns</h3>
        <p>Total Campaigns: 42</p>
        <button id="btncol">See More</button>
    </div>
</div>
<div id="box">
    <h3>Make Announcement</h3>
    Announcement Message:<br>
    <textarea rows="4" style="width:98%;"></textarea><br><br>
    <button id="btncol">Post Announcement</button>
</div>

</section>

<footer>
Contact us:
<a href="mailto:shamvi.abdullah@gmail.com">click here</a>
</footer>
</body>
</html>
