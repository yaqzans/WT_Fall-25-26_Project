<?php
include "../db.php";

if (!isset($_GET['id'])) {
    die("Survey not found");
}

$id = (int)$_GET['id'];

/* ===== DEFAULT SURVEYS (HARDCODED) ===== */
$default_surveys = [
    1001 => [
        "title" => "An Analytical Study on Digital Learning Adaptation",
        "subtitle" => "Exploring student adjustment trends in digital learning environments",
        "questions" => 12,
        "status" => "Open",
        "credit" => 5,
        "responses" => "7 / 10",
        "time" => "2 minutes",
        "link" => "https://forms.gle/examplelink"
    ],
    1002 => [
        "title" => "Investigating Cognitive Load in Remote Education",
        "subtitle" => "Measuring task complexity factors",
        "questions" => 10,
        "status" => "Open",
        "credit" => 4,
        "responses" => "5 / 10",
        "time" => "3 minutes",
        "link" => "https://forms.gle/examplelink"
    ],
    1003 => [
        "title" => "Evaluating Usability Metrics of Academic Platforms",
        "subtitle" => "User experience indicators",
        "questions" => 8,
        "status" => "Closed",
        "credit" => 3,
        "responses" => "10 / 10",
        "time" => "1 minute",
        "link" => "https://forms.gle/examplelink"
    ]
];

/* ===== CHECK DEFAULT SURVEY ===== */
if (isset($default_surveys[$id])) {
    $survey = $default_surveys[$id];
} else {

    /* ===== FETCH FROM DATABASE ===== */
    $res = mysqli_query($conn, "SELECT * FROM surveys WHERE id = $id");
    if (mysqli_num_rows($res) !== 1) {
        die("Survey not found");
    }

    $row = mysqli_fetch_assoc($res);

    $survey = [
        "title" => $row['title'],
        "subtitle" => $row['subtitle'],
        "questions" => "N/A",
        "status" => "Open",
        "credit" => $row['credit'],
        "responses" => "0 / " . $row['max_responses'],
        "time" => $row['time_minutes'] . " minutes",
        "link" => $row['form_link']
    ];
}
?>

<!doctype html>
<html lang="en">
<head>
  <title>Survey Details</title>
  <link rel="stylesheet" href="Surveyviewpage.css">
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

    <h1><?php echo htmlspecialchars($survey['title']); ?></h1>

    <div class="subtitle">
      <?php echo htmlspecialchars($survey['subtitle']); ?>
    </div>

    <div class="info-row">
      <div class="label">Total Questions</div>
      <div class="value"><?php echo $survey['questions']; ?></div>
    </div>

    <div class="info-row">
      <div class="label">Status</div>
      <div class="value"><?php echo $survey['status']; ?></div>
    </div>

    <div class="info-row">
      <div class="label">Credit Points</div>
      <div class="value"><?php echo $survey['credit']; ?></div>
    </div>

    <div class="info-row">
      <div class="label">Responses</div>
      <div class="value"><?php echo $survey['responses']; ?></div>
    </div>

    <div class="info-row">
      <div class="label">Estimated Time</div>
      <div class="value"><?php echo $survey['time']; ?></div>
    </div>

    <div class="link-box">
      <strong>Google Form Link:</strong><br>
      <a href="<?php echo htmlspecialchars($survey['link']); ?>" target="_blank">
        <?php echo htmlspecialchars($survey['link']); ?>
      </a>
    </div>

    <div class="actions">
      <button class="btn ghost" onclick="history.back()">Go Back</button>
      <button class="btn primary">Start Survey</button>
    </div>

  </div>

</main>

</body>
</html>
