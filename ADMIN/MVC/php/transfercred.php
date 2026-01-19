<?php
include "../db/tc.php";

$sender_id = 1;   // temporary sender
$error = "";
$sender = mysqli_fetch_assoc(getProfile($sender_id));

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (
        empty($_POST["receiver1"]) ||
        empty($_POST["receiver2"]) ||
        empty($_POST["amount"])
    ) {
        $error = "All fields required";
    } else {

        $receiver1 = $_POST["receiver1"];
        $receiver2 = $_POST["receiver2"];
        $amount    = (int)$_POST["amount"];

        if ($receiver1 != $receiver2) {
            $error = "Receiver IDs do not match";
        } elseif ($amount <= 0) {
            $error = "Amount must be greater than 0";
        } elseif ($receiver1 == $sender_id) {
            $error = "You cannot transfer credits to yourself";
        } elseif ($sender["credits"] < $amount) {
            $error = "Not enough credits";
        } else {
            transferCredits($sender_id, $receiver1, $amount);
            $sender = mysqli_fetch_assoc(getProfile($sender_id));
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/transfercred.css">
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
<form method="post">
<p>
User ID: <b id="uid"><?php echo $sender_id; ?></b>
<span style="margin-left: 15px;">
Credits: <b><?php echo $sender["credits"]; ?></b>
</span>
</p>

Receiver User ID:<br>
<input type="text" name="receiver1" style="width: 300px;"><br><br>
Confirm Receiver ID:<br>
<input type="text" name="receiver2" style="width: 300px;"><br><br>
Amount to Transfer:<br>
<input type="number" name="amount" style="width: 170px;"><br><br>
<button id="btncol">Confirm Transfer</button>
<?php echo "<span style='color:red;'>$error</span>"; ?>
</form>
</div>
</section>
<footer>
Contact us:
<a href="mailto:shamvi.abdullah@gmail.com">click here</a>
</footer>
</body>
</html>