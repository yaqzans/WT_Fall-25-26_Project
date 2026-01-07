<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../Userlogin/userlogin.php");
    exit();
}

include "../db.php";

$uid = $_SESSION['user_id'];
$error = "";
$success = "";

if (isset($_POST['publish'])) {

    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $form_link = $_POST['form_link'];
    $credit = $_POST['credit'];
    $max_responses = $_POST['max_responses'];
    $time_minutes = $_POST['time_minutes'];

    if (
        empty($title) ||
        empty($form_link) ||
        empty($credit) ||
        empty($max_responses) ||
        empty($time_minutes)
    ) {
        $error = "All required fields must be filled";
    } else {

        $sql = "INSERT INTO surveys
                (user_id, title, subtitle, form_link, credit, max_responses, time_minutes)
                VALUES
                ($uid, '$title', '$subtitle', '$form_link', '$credit', '$max_responses', '$time_minutes')";

        if (mysqli_query($conn, $sql)) {
            $success = "Survey published successfully";
        } else {
            $error = "Database error";
        }
    }
}

$my_surveys_res = mysqli_query(
    $conn,
    "SELECT * FROM surveys WHERE user_id = $uid ORDER BY id DESC"
);

$available_surveys_res = mysqli_query(
    $conn,
    "SELECT * FROM surveys WHERE user_id != $uid ORDER BY id DESC"
);
?>

<!doctype html>
<html>
<head>
  <title>NeedSurveyResponses — Dashboard</title>
  <link rel="stylesheet" href="DASHBOARD.css">
</head>

<body>

<header>
  <button id="btn">← Back</button>
  <h2>NeedSurveyResponses</h2>

  <a href="../Userlogin/userlogin.php" id="logout">Logout</a>
</header>

<main>

  <div class="left-col">

    <div class="card">
      <h2>Available Surveys</h2>
      <div class="muted">Surveys posted by other participants.</div>

      <ul class="survey-list">

        <!-- DEFAULT SURVEYS -->
        <li class="survey-item">
          <div class="survey-left">
            <div class="survey-title"><a href="../Surveyviewpage/surveyviewpage.php?id=1001">
            An Analytical Study on Digital Learning Adaptation
            </a></div>
            <div class="muted">Exploring student adjustment trends</div>
          </div>
          <div class="survey-right">
            <div>12 Q • Open</div>
            <div>Credits: 5</div>
            <div>Responses: 7 / 10</div>
            <div>Time: 2 min</div>
          </div>
        </li>

        <li class="survey-item">
          <div class="survey-left">
            <div class="survey-title"><a href="../Surveyviewpage/surveyviewpage.php?id=1002">
            Investigating Cognitive Load in Remote Education</a></div>
            <div class="muted">Measuring task complexity factors</div>
          </div>
          <div class="survey-right">
            <div>10 Q • Open</div>
            <div>Credits: 4</div>
            <div>Responses: 5 / 10</div>
            <div>Time: 3 min</div>
          </div>
        </li>

        <li class="survey-item">
          <div class="survey-left">
            <div class="survey-title"><a href="../Surveyviewpage/surveyviewpage.php?id=1003">
            Evaluating Usability Metrics of Academic Platforms</a></div>
            <div class="muted">User experience indicators</div>
          </div>
          <div class="survey-right">
            <div>8 Q • Closed</div>
            <div>Credits: 3</div>
            <div>Responses: 10 / 10</div>
            <div>Time: 1 min</div>
          </div>
        </li>

        <?php
        while ($row = mysqli_fetch_assoc($available_surveys_res)) {
            echo '<li class="survey-item">';
            echo '<div class="survey-left">';
            echo '<div class="survey-title">
            <a href="../Surveyviewpage/surveyviewpage.php?id=' . $row['id'] . '" style="color:inherit; text-decoration:none;">
            ' . htmlspecialchars($row['title']) . '
            </a>
            </div>';

            echo '<div class="muted">' . htmlspecialchars($row['subtitle']) . '</div>';
            echo '</div>';
            echo '<div class="survey-right">';
            echo '<div>Open</div>';
            echo '<div>Credits: ' . $row['credit'] . '</div>';
            echo '<div>Responses: 0 / ' . $row['max_responses'] . '</div>';
            echo '<div>Time: ' . $row['time_minutes'] . ' min</div>';
            echo '</div>';
            echo '</li>';
        }
        ?>
      </ul>
    </div>

    <div class="card">
      <h2>My Surveys</h2>
      <div class="muted">Surveys created by you.</div>

      <ul class="survey-list">
        <?php
        if (mysqli_num_rows($my_surveys_res) > 0) {
            while ($row = mysqli_fetch_assoc($my_surveys_res)) {
                echo '<li class="survey-item">';
                echo '<div class="survey-left">';
                echo '<div class="survey-title">
                <a href="../Surveyviewpage/surveyviewpage.php?id=' . $row['id'] . '" style="color:inherit; text-decoration:none;">
                ' . htmlspecialchars($row['title']) . '
                </a>
                </div>';

                echo '<div class="muted">' . htmlspecialchars($row['subtitle']) . '</div>';
                echo '</div>';
                echo '<div class="survey-right">';
                echo '<div>Open</div>';
                echo '<div>Credits: ' . $row['credit'] . '</div>';
                echo '<div>Responses: 0 / ' . $row['max_responses'] . '</div>';
                echo '<div>Time: ' . $row['time_minutes'] . ' min</div>';
                echo '</div>';
                echo '</li>';
            }
        } else {
            echo '<li class="survey-item"><div class="muted">No surveys created yet</div></li>';
        }
        ?>
      </ul>
    </div>

  </div>

  <div class="right-col">

    <div class="card">
      <h2>Submit Survey</h2>
      <form method="post">

        <label>Title</label>
        <input type="text" name="title">

        <label>Subtitle</label>
        <input type="text" name="subtitle">

        <label>Google Form link</label>
        <input type="text" name="form_link">

        <label>Credit</label>
        <input type="number" name="credit">

        <label>Responses Needed</label>
        <input type="number" name="max_responses">

        <label>Time (minutes)</label>
        <input type="number" name="time_minutes">

        <div style="color:red;"><?php echo $error; ?></div>
        <div style="color:green;"><?php echo $success; ?></div>

        <div class="actions">
          <button type="reset" class="btn ghost">Discard</button>
          <button type="submit" name="publish" class="btn primary">Publish</button>
        </div>

      </form>
    </div>

    <div class="card credit-box">
      <div class="credit-row">
        <div class="credit-text">Total Credits: 20</div>
        <button class="btn transfer-btn">Transfer Credits</button>
      </div>
    </div>

  </div>

</main>

</body>
</html>
