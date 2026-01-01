<?php
include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="transfercred.css">
<title>Transfer Credits</title>
</head>
<body>
<header> 
<button id="btn">← Back</button>
<h2>NeedSurveyResponses</h2>
</header>
<section>
<div id="box">
<h3>Transfer Credits</h3>
<p>User ID: <b id = "uid">XYZ</b><span style="margin-left: 15px;">Credits: <b>42</b></p>
Receiver User ID:<br>
<input type="text" style="width: 300px;" placeholder="Enter user ID"><br><br>

Confirm Receiver ID:<br>
<input type="text" style="width: 300px;" placeholder="Re-enter user ID"><br><br>

Amount to Transfer:<br>
<input type="number" style="width: 170px;" placeholder="Enter transfer amount"><br><br>

<button id="btncol">Confirm Transfer</button>
</div>
</section>
<footer>
Contact us:
<a href="mailto:shamvi.abdullah@gmail.com">click here</a>
</footer>
</body>
</html>