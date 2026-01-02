<?php
include "../config.php";

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
                (title, subtitle, form_link, credit, max_responses, time_minutes)
                VALUES
                ('$title', '$subtitle', '$form_link', '$credit', '$max_responses', '$time_minutes')";

        if (mysqli_query($conn, $sql)) {
            $success = "Survey published successfully";
        } else {
            $error = "Database error";
        }
    }
}


$my_surveys_res = mysqli_query($conn, "SELECT * FROM surveys ORDER BY id DESC");
?>

<!doctype html>
<html>
<head>
  <title>NeedSurveyResponses — Dashboard</title>
  <link rel="stylesheet" href="DASHBOARD.css"> 
</head>

<body>

<header>
  <div class="nav">
    <div class="brand">
      <div class="logo"></div>
      <div class="site-name">NeedSurveyResponses</div>
    </div>
    <div class="welcome">
      Welcome Student |
      <a href="../Userlogin/userlogin.php" style="text-decoration:none; color:inherit;">Logout</a>
    </div>
  </div>
</header>

<main>

  <div class="left-col">

    <div class="card">
      <h2>Available Surveys</h2>
      <div class="muted">Surveys posted by other participants.</div>

      <ul class="survey-list">

        <li class="survey-item">
          <div class="survey-left">
            <div class="survey-title">
              <a href="../Surveyviewpage/surveyviewpage.php" style="color: inherit; text-decoration: none;">
                An Analytical Study on Digital Learning Adaptation
              </a>
            </div>
            <small class="muted">Exploring student adjustment trends</small>
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
            <div class="survey-title">Investigating Cognitive Load in Remote Education</div>
            <small class="muted">Measuring task complexity factors</small>
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
            <div class="survey-title">Evaluating Usability Metrics of Academic Platforms</div>
            <small class="muted">User experience indicators</small>
          </div>
          <div class="survey-right">
            <div>8 Q • Closed</div>
            <div>Credits: 3</div>
            <div>Responses: 10 / 10</div>
            <div>Time: 1 min</div>
          </div>
        </li>

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
                echo '  <div class="survey-left">';
                echo '    <div class="survey-title">' . htmlspecialchars($row['title']) . '</div>';
                echo '    <small class="muted">' . htmlspecialchars($row['subtitle']) . '</small>';
                echo '  </div>';
                echo '  <div class="survey-right">';
                echo '    <div>Open</div>';
                echo '    <div>Credits: ' . $row['credit'] . '</div>';
                echo '    <div>Responses: 0 / ' . $row['max_responses'] . '</div>';
                echo '    <div>Time: ' . $row['time_minutes'] . ' min</div>';
                echo '  </div>';
                echo '</li>';
            }
        } else {
            echo '<li class="survey-item">';
            echo '<div class="survey-left"><small class="muted">No surveys created yet</small></div>';
            echo '</li>';
        }
        ?>

      </ul>
    </div>

  </div>


  <div class="right-col">
    <div class="card">
      <h2>Submit Survey</h2>
      <div class="muted">Use this section to post your own survey.</div>

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
  </div>

</main>

</body>
</html>
