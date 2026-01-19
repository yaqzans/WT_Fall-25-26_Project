
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/AdminSearchUser.css"><title>Admin Search User Page</title>
</head>
<body>

<header> 
<a href="../AdminPage/adminpage.php">
    <button id="btn">← Back</button>
</a>
<h2>NeedSurveyResponses</h2>
</header>

<section>
<div id="searchBox">
    <form method="get">
        <input type="text" name="uid" placeholder="Search by User ID">
    </form>
</div>

<div id="box">
    <h3>Users</h3>
<?php
while ($row = mysqli_fetch_assoc($result)) 
{
    echo '<a href="../php/AdminViewUser.php?id=' . $row['id'] . '">';
    echo '<div id="userItem">';
    echo 'User ID: ' . $row['id'];
    echo '</div>';
    echo '</a>';
}
?>
</div>

</section>

<footer>
Contact us:
<a href="mailto:shamvi.abdullah@gmail.com">click here</a>
</footer>
</body>
</html>
