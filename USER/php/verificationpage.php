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

<style>
* { box-sizing: border-box; }

body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: #f5f3fb;
  color: #0b1020;
}

header {
  background: #ffffff;
  border-bottom: 1px solid #e9e9ef;
  padding: 14px 0;
}
.nav {
  width: 900px;
  max-width: 95%;
  margin: 0 auto;
  display: flex;
  align-items: center;
  gap: 10px;
}
.logo {
  width: 36px;
  height: 36px;
  background: #6c5ce7;
  border-radius: 6px;
}
.site-name {
  font-weight: bold;
  font-size: 1.05rem;
  color: #5b3dd3;
}

main {
  width: 900px;
  max-width: 95%;
  margin: 40px auto;
  display: flex;
  justify-content: center;
}

.card {
  background: #ffffff;
  border-radius: 12px;
  padding: 30px;
  box-shadow: 0 8px 20px rgba(92,61,196,0.08);
  text-align: center;
  width: 100%;
  max-width: 520px;
}

.timer-box {
  font-size: 1.2rem;
  margin: 20px 0;
  padding: 14px;
  border-radius: 8px;
  background: #f0edff;
  font-weight: bold;
}

.actions {
  display: flex;
  justify-content: center;
  gap: 12px;
  margin-top: 20px;
}

.btn {
  padding: 10px 18px;
  border-radius: 8px;
  font-weight: bold;
  border: none;
  cursor: pointer;
}

.btn.primary {
  background: #6c5ce7;
  color: white;
}

.btn.ghost {
  background: transparent;
  border: 1px solid #ddd;
  color: #6c5ce7;
}

.btn:disabled {
  background: #ccc;
  color: #777;
}
</style>
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
