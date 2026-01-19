<?php
include "../db/pg.php";

$uid = 1; // temp user

$erroremail = "";
$errorpass = "";
$successemail = "";
$successpass = "";
$userDeleted = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST["delete_campaign"])) {
        deleteCampaign($_POST["delete_campaign"], $uid);
    }

    if (isset($_POST["delete_account"])) {
        deleteUser($uid);
        $userDeleted = true;
    }

    if (isset($_POST["update_profile"]) && !$userDeleted) {
        if (empty($_POST["new_email"])) {
            $erroremail = "Email required";
        } else {
            updateEmail($uid, $_POST["new_email"]);
            $successemail = "Profile updated";
        }
    }

    if (isset($_POST["change_password"]) && !$userDeleted) {
        if (empty($_POST["new_pass"]) || empty($_POST["confirm_pass"])) {
            $errorpass = "All fields required";
        } elseif ($_POST["new_pass"] !== $_POST["confirm_pass"]) {
            $errorpass = "Passwords do not match";
        } else {
            $hash = password_hash($_POST["new_pass"], PASSWORD_DEFAULT);
            updatePassword($uid, $hash);
            $successpass = "Password changed";
        }
    }
}

$user_res = getUser($uid);
$user = mysqli_fetch_assoc($user_res);

if ($userDeleted || !$user) {
    echo "<p style='font-weight:bold; text-align:center; font-size:32px;'>User no longer exists</p>";
    return;
}

$profile = mysqli_fetch_assoc(getProfile($uid));
$camp_res = getUserCampaigns($uid);
include "../html/profilegui.php";
?>
