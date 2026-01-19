<?php
include "../db.php";
$sender_id = 1;   // temporary sender
$error = "";
$sender_res = mysqli_query($conn, "SELECT * FROM profiles WHERE user_id = $sender_id");
$sender = mysqli_fetch_assoc($sender_res);

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["receiver1"]) || empty($_POST["receiver2"]) || empty($_POST["amount"]))
    {
        $error = "All fields required";
    }
    else
    {
        $receiver1 = $_POST["receiver1"];
        $receiver2 = $_POST["receiver2"];
        $amount = (int)$_POST["amount"];

        if ($receiver1 != $receiver2)
        {
            $error = "Receiver IDs do not match";
        }
        else if ($amount <= 0)
        {
            $error = "Amount must be greater than 0";
        }
        else if ($receiver1 == $sender_id)
        {
            $error = "You cannot transfer credits to yourself";
        }
        else if ($sender["credits"] < $amount)
        {
            $error = "Not enough credits";
        }
        else
        {
            mysqli_query($conn,"UPDATE profiles SET credits = credits - $amount WHERE user_id = $sender_id");
            mysqli_query($conn,"UPDATE profiles SET credits = credits + $amount WHERE user_id = $receiver1");
            mysqli_query($conn,"INSERT INTO ledger (sender_id, receiver_id, amount) VALUES ($sender_id, $receiver1, $amount)");
        }
        $sender_res = mysqli_query($conn, "SELECT * FROM profiles WHERE user_id = $sender_id");
        $sender = mysqli_fetch_assoc($sender_res);
    }
}
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