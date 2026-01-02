<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Survey Details</title>

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
      margin: 30px auto;
    }

    .card {
      background: #ffffff;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 8px 20px rgba(92,61,196,0.08);
    }

    h1 {
      margin: 0 0 6px 0;
      font-size: 1.5rem;
    }
    .subtitle {
      color: #6b6b7a;
      margin-bottom: 18px;
    }

    .info-row {
      display: flex;
      justify-content: space-between;
      padding: 10px 0;
      border-bottom: 1px solid #eee;
      font-size: 0.95rem;
    }
    .info-row:last-child {
      border-bottom: none;
    }
    .label {
      color: #6b6b7a;
    }
    .value {
      font-weight: bold;
    }

    /* Google link */
    .link-box {
      margin-top: 18px;
      padding: 12px;
      border-radius: 8px;
      background: #f0edff;
      font-size: 0.95rem;
    }
    .link-box a {
      color: #5b3dd3;
      word-break: break-all;
    }

    /* ACTIONS */
    .actions {
      display: flex;
      justify-content: flex-end;
      gap: 10px;
      margin-top: 22px;
    }
    .btn {
      padding: 10px 16px;
      border-radius: 8px;
      font-weight: bold;
      border: none;
      cursor: pointer;
      font-size: 0.95rem;
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
    <div class="logo"></div>
    <div class="site-name">NeedSurveyResponses</div>
  </div>
</header>

<main>

  <div class="card">

    <h1>An Analytical Study on Digital Learning Adaptation</h1>
    <div class="subtitle">
      Exploring student adjustment trends in digital learning environments
    </div>

    <div class="info-row">
      <div class="label">Total Questions</div>
      <div class="value">12</div>
    </div>

    <div class="info-row">
      <div class="label">Status</div>
      <div class="value">Open</div>
    </div>

    <div class="info-row">
      <div class="label">Credit Points</div>
      <div class="value">5</div>
    </div>

    <div class="info-row">
      <div class="label">Responses</div>
      <div class="value">7 / 10</div>
    </div>

    <div class="info-row">
      <div class="label">Estimated Time</div>
      <div class="value">2 minutes</div>
    </div>

    <div class="link-box">
      <strong>Google Form Link:</strong><br>
      <a href="https://forms.gle/examplelink" target="_blank">
        https://forms.gle/examplelink
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
