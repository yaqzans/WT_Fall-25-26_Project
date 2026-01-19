<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/AdminViewUser.css">
<title>Admin Views User Profile</title>
</head>
<body>
<header> 
<a href="../AdminSearchUser/adminsearchuser.php"> 
<button id="btn">← Back</button> 
</a>
<h2>NeedSurveyResponses</h2>
</header>
<main>
<section>
<div id="box">
<h3>User Profile</h3>
<p><b>User ID:</b> <span id="id"><?php echo $user['id']; ?></span></p>
<p><b>Email:</b> <?php echo $user['email']; ?></p>
<p><b>Current Credits:</b> <span id="credits"><b><?php echo $profile['credits']; ?></b></span></p>
<form method="post">
    <input type="number" name="amount" value="<?php echo $amount; ?>" placeholder="Credits">
    <?php echo $creditError; ?>
    <br><br>
    <button id="btncol" name="action" value="add">Add Credits</button>
    <button id="btncol" name="action" value="remove">Remove Credits</button>
    <button name="action" value="delete" style="background:red; color:white; cursor:pointer;">Delete User</button>
</form>
</div>
<div id="box">
<h3>Survey History</h3>
<?php
while ($row = mysqli_fetch_assoc($camp_res)) 
{
    echo '<div id="surveyItem">';
    echo '<b>' . $row['title'] . '</b><br>';
    echo '<span id="meta">Status: ' . $row['status'] . '</span><br>';
    echo '<span id="meta">Responses: ' . $row['responses_served'] . ' / ' . $row['responses_needed'] . '</span>';
    echo '</div>';
}
if (mysqli_num_rows($camp_res) == 0) 
{
    echo '<span id="meta">No surveys created</span>';
}
?>
</div>
</section>
</main>
<footer>
Contact us:
<a href="mailto:shamvi.abdullah@gmail.com">click here</a>
</footer>
</body>
</html>