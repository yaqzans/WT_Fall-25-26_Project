<?php
include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="AdminSearchUser.css">
<title>Admin Search User Page</title>
</head>
<body>

<header> 
<button id="btn">← Back</button>
<h2>NeedSurveyResponses</h2>
</header>

<section>
<div id="searchBox">
    <input type="text" placeholder="Search by User ID">
</div>
<div id="box">
    <h3>Users</h3>
    <div id="userItem">
        User ID: 101
    </div>
    <div id="userItem">
        User ID: 102
    </div>
    <div id="userItem">
        User ID: 103
    </div>
    <div id="userItem">
        User ID: 104
    </div>
</div>

</section>

<footer>
Contact us:
<a href="mailto:shamvi.abdullah@gmail.com">click here</a>
</footer>
</body>
</html>
