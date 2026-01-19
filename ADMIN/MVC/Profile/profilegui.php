<?php
include "../db/pg.php";

$uid = 1; // temp user

$erroremail = "";
$errorpass = "";
$successemail = "";
$successpass = "";
$userDeleted = false;

/* POST actions */
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

/* FETCH DATA */
$user_res = getUser($uid);
$user = mysqli_fetch_assoc($user_res);

if ($userDeleted || !$user) {
    echo "<p style='font-weight:bold; text-align:center; font-size:32px;'>User no longer exists</p>";
    return;
}

$profile = mysqli_fetch_assoc(getProfile($uid));
$camp_res = getUserCampaigns($uid);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/profilegui.css">
<title>User Profile</title>
</head>
<body>
<header> 
<button id = "btn">← Back </button>
<h2>NeedSurveyResponses</h2>
<button id = "logout">Logout</button>
</header>
<main>
<section>
<div id= "box">
    <h3>My Profile</h3>
    <p>
    User ID: <b id="uid"><?php echo $uid; ?></b>
    <span style="margin-left: 15px;">
    Credits: <b><?php echo $profile["credits"]; ?></b>
    </span>
    </p>
    <form method="post">
    Email:<br>
    <input type="text" name="new_email" value="<?php echo $user["email"]; ?>"><br><br>
    <?php echo $erroremail; ?>
    <button id="btncol" name="update_profile">Update Profile</button>
    <button name="delete_account" style="background:red;color:white;cursor:pointer">Delete Account</button>
    <?php echo $successemail;?>
    </form>
</div>

<div id= "box">
    <h3>Change Password</h3>
    <form method="post">
    New Password:<br>
    <input type="password" name="new_pass"><br><br>
    Confirm Password:<br>
    <input type="password" name="confirm_pass"><br><br>
    <button id="btncol" name="change_password">Change Password</button>
    <?php echo $errorpass; ?>
    <?php echo $successpass; ?>
    </form>
</div>

<div id = "box"> 
<h3>My Surveys</h3>
<?php
while ($row = mysqli_fetch_assoc($camp_res))
{
    echo '<div id="surveyItem">';
    echo '<b>' . $row["title"] . '</b><br>';
    echo '<span id="meta">Responses: ' . $row["responses_served"] . ' / ' . $row["responses_needed"] . '</span>';
    echo '<form method="post" style="margin-top:6px;">';
    echo '<button style="background: #e74c3c; color: white; border: none; padding: 6px 10px; border-radius: 4px; cursor: pointer; font-size: 12px; margin-top: 6px;" name="delete_campaign" value="' . $row['id'] . '">Delete Survey</button>';
    echo '</form>';
    echo '</div>';
}
if (mysqli_num_rows($camp_res) == 0)
{
    echo '<span id="meta">No surveys created</span>';
}
?>
</section>
<footer>
Contact us:
<a href="mailto:shamvi.abdullah@gmail.com">click here</a>
</footer>
</body>
</html>
