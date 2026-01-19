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
include "../html/transfercred.php";
?>
