<!doctype html>
<html>
<head>
  <title>NeedSurveyResponses — Dashboard</title>

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
      width: 1100px;
      max-width: 95%;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo {
      width: 38px;
      height: 38px;
      background: #6c5ce7;
      border-radius: 6px;
    }

    .site-name {
      font-weight: bold;
      font-size: 1.05rem;
      color: #5b3dd3;
    }

    .welcome {
      color: #6b6b7a;
      font-weight: 600;
    }

    main {
      width: 1100px;
      max-width: 95%;
      margin: 20px auto;
      display: flex;
      gap: 16px;
      align-items: flex-start;
    }

    .left-col { flex: 1; }
    .right-col { width: 340px; }

    .card {
      background: #ffffff;
      border-radius: 12px;
      padding: 14px;
      box-shadow: 0 8px 20px rgba(92,61,196,0.08);
      margin-bottom: 16px;
    }

    .card h2 {
      margin: 0 0 6px 0;
      font-size: 1.05rem;
    }

    .muted {
      color: #6b6b7a;
      font-size: 0.95rem;
      margin-bottom: 12px;
    }

    .survey-list {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .survey-item {
      display: flex;
      gap: 12px;
      padding: 12px;
      border-radius: 10px;
      border: 1px solid #eee;
      margin-bottom: 10px;
      align-items: flex-start;
    }

    .survey-left { flex: 1; }

    .survey-title {
      font-weight: 600;
      margin-bottom: 4px;
    }

    .survey-right {
      text-align: right;
      font-size: 0.85rem;
      color: #6b6b7a;
      line-height: 1.5;
      min-width: 140px;
    }

    label {
      display: block;
      margin-top: 8px;
      font-size: 0.9rem;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-top: 4px;
      border-radius: 6px;
      border: 1px solid #e8e6ff;
    }

    .actions {
      display: flex;
      justify-content: flex-end;
      gap: 8px;
      margin-top: 12px;
    }

    .btn {
      padding: 8px 12px;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
      border: none;
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
  </style>
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
  <a href="logout.php" style="text-decoration:none; color:inherit;">Logout</a>
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
              <a href="surveyviewpage.php" style="color: inherit; text-decoration: none;">
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
      <h2>My Surveys (Quick)</h2>
      <div class="muted">Surveys created by you.</div>

      <ul class="survey-list">
        <li class="survey-item">
          <div class="survey-left">
            <div class="survey-title">Research Topic Selection Poll</div>
            <small class="muted">Consensus study for the semester</small>
          </div>
          <div class="survey-right">
            <div>5 Q • Open</div>
            <div>Credits: 2</div>
            <div>Responses: 3 / 10</div>
            <div>Time: 1 min</div>
          </div>
        </li>
      </ul>
    </div>

  </div>

  <div class="right-col">
    <div class="card">
      <h2>Submit Survey</h2>
      <div class="muted">Use this section to post your own survey.</div>

      <label>Title</label>
      <input type="text">

      <label>Subtitle</label>
      <input type="text">

      <label>Google Form link</label>
      <input type="text">

      <label>Credit</label>
      <input type="number">

      <label>Responses Needed</label>
      <input type="number">

      <label>Time (minutes)</label>
      <input type="number">

      <div class="actions">
        <button class="btn ghost">Discard</button>
        <button class="btn primary">Publish</button>
      </div>
    </div>
  </div>

</main>

</body>
</html>
