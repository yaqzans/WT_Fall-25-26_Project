<?php
include "../db.php";
if (!isset($_GET['id'])) {
    die("User not found"); 
}
$uid = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="AdminViewUser.css">
<title>Admin Views User Profile</title>
</head>

<body>
<header> 
<button id="btn">← Back</button>
<h2>NeedSurveyResponses</h2>
</header>

<main>
<section>

<div id="box">
<h3>User Profile</h3>

<p><b>User ID:</b> <span id = "id">XYZ</span></p>
<p><b>Name:</b> Student</p>
<p><b>Email:</b> student@gmail.com</p>
<p><b>Current Credits:</b> <span id="credits"><b>42</b></span></p>

<button id="btncol">Add Credits</button>
<button id="btncol">Remove Credits</button>
<button style="background:red; color:white; cursor:pointer;">Delete User</button>
</div>

<div id="box">
<h3>Survey History</h3>

<div id="surveyItem">
<b>Research Topic Selection Poll</b><br>
<span id="meta">Status: Active</span><br>
<span id="meta">Responses: 3 / 10</span>
</div>

<div id="surveyItem">
<b>Learning Habits Survey</b><br>
<span id="meta">Status: Closed</span><br>
<span id="meta">Responses: 10 / 10</span>
</div>
</div>

</section>
</main>

<footer>
Contact us:
<a href="mailto:shamvi.abdullah@gmail.com">click here</a>
</footer>
</body>
</html>
