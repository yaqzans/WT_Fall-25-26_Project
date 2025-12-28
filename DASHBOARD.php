<!doctype html>
<html lang="en">
<head>
  <title>NeedSurveyResponses — Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
      color: #5b3dd3;
    }

    main {
      width: 1100px;
      max-width: 95%;
      margin: 20px auto;
      display: flex;
      gap: 16px;
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

    .survey-item {
      display: flex;
      gap: 12px;
      padding: 12px;
      border-radius: 10px;
      border: 1px solid #eee;
      margin-bottom: 10px;
      transition: background 0.2s;
    }

    .survey-item:hover {
      background: #f3f1ff;
      cursor: pointer;
    }
    .survey-right {
  text-align: right;
  font-size: 0.85rem;
  color: #6b6b7a;
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
    <div>Welcome Student</div>
  </div>
</header>

<main>
  <div class="left-col">
    <div class="card">
      <h2>Available Surveys</h2>

      <div class="survey-item">
        <div>
          <b>Digital Learning Adaptation</b>
          <div>Student adjustment trends</div>
        </div>
      </div>
    </div>
  </div>

  <div class="right-col">
    <div class="card">
      <h2>Submit Survey</h2>
      <input type="text" placeholder="Title">
    </div>
  </div>
  <div class="survey-right">
  <div>12 Q • Open</div>
  <div>Credits: 5</div>
  <div>Responses: 7 / 10</div>
  <div>Time: 2 min</div>
</div>
</main>
</body>
</html>
