<!doctype html>
<html lang="en">
<head>
  <title>NeedSurveyResponses — Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
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

    .muted {
      color: #6b6b7a;
      font-size: 0.95rem;
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
    <div class="welcome">Welcome Student</div>
  </div>
</header>

<main>
  <div class="left-col">
    <div class="card">
      <h2>Available Surveys</h2>
      <div class="muted">Surveys posted by other participants.</div>
      <!-- Inside Available Surveys card -->
<ul class="survey-list">
  <li class="survey-item"></li>
</ul>

    </div>
  </div>
  <div class="right-col"></div>
</main>

</body>
</html>
