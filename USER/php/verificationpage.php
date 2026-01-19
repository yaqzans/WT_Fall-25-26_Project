<?php
session_start();
include "../db/db.php";

if (!isset($_SESSION['user_id']) || !isset($_GET['id'])) {
    die("Access denied");
}

$uid = $_SESSION['user_id'];
$survey_id = (int)$_GET['id'];

$res = mysqli_query($conn, "SELECT * FROM surveys WHERE id = $survey_id");

if (mysqli_num_rows($res) !== 1) {
    die("Survey not found");
}

$survey = mysqli_fetch_assoc($res);

if (isset($_POST['complete'])) {

    $credit = (int)$survey['credit'];

    mysqli_query(
        $conn,
        "UPDATE profiles
         SET credits = credits + $credit
         WHERE user_id = $uid"
    );

    header("Location: ../php/DASHBOARD.php");
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Survey Verification — NeedSurveyResponses</title>

<link rel="stylesheet" href="../css/verificationpage.css"> 
</head>

<body>

<header>
  <div class="nav">
    <div class="logo"></div>
    <div class="site-name">NeedSurveyResponses</div>
  </div>
</header>

<main>
  <div class="card">

    <h2>Survey Verification</h2>

    <div class="survey-name">
      <?php echo htmlspecialchars($survey['title']); ?>
    </div>

    <p>Please complete the survey in the given time.</p>

    <div id="timer" class="timer-box">
      Time Remaining: <?php echo (int)$survey['time_minutes']; ?>:00
    </div>

    <div class="actions">
      <button class="btn ghost" onclick="history.back()">Go Back</button>

      <form method="post" action="">
        <button id="completeBtn" name="complete" class="btn primary" disabled>
          Survey Completed
        </button>
      </form>
    </div>

  </div>
</main>

<script>
var totalMinutes = <?php echo (int)$survey['time_minutes']; ?>;
var timeLeft = totalMinutes * 60;

var timerEl = document.getElementById("timer");
var completeBtn = document.getElementById("completeBtn");

var interval = setInterval(function () {

  var minutes = Math.floor(timeLeft / 60);
  var seconds = timeLeft % 60;

  if (seconds < 10) seconds = "0" + seconds;

  timerEl.innerHTML = "Time Remaining: " + minutes + ":" + seconds;

  if (timeLeft <= 0) {
    clearInterval(interval);
    timerEl.innerHTML = "Time Completed";
    completeBtn.disabled = false;
  }

  timeLeft--;

}, 1000);
</script>

</body>
</html>
