<?php
include "../db/asc.php";
include "../db/avu.php";

if (!isset($_GET['id'])) 
{
    die("User not found"); 
}
$uid = $_GET['id'];
$amount = "";
$creditError = "";
$userDeleted = false;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{ //I tried to use the empty error method but it wasnt working
    if ($_POST["action"] == "delete") 
    {
        avu_delete_user($uid);
        $userDeleted = true;
    }
    if (empty($_POST["amount"]) && $_POST["action"] != "delete") 
    {
        $creditError = "Amount required";
    }
    else 
    {
        $amount = (int)$_POST["amount"];

        if ($amount <= 0) 
        {
            $creditError = "Amount must be greater than 0";
        }
        else 
        {
            if ($_POST["action"] == "add") 
            {
                avu_add_credits($uid, $amount);
            }

            if ($_POST["action"] == "remove") 
            {
                avu_remove_credits($uid, $amount);
            }
        }
    }
    $amount = "";
}
$user_res = avu_get_user($uid); //This is for general info
$user = mysqli_fetch_assoc($user_res);
if ($userDeleted || !$user) 
{
    echo "<p style='font-weight:bold; text-align:center; font-size:32px;'>User no longer exists</p>";
    return;
}
$profile_res = avu_get_profile($uid); //This is for profile info
$profile = mysqli_fetch_assoc($profile_res);
$camp_res = avu_get_campaigns($uid); //This is for survey history
include "../html/AdminViewUser.php";
?>