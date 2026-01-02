<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>NeedSurveyResponses</title>

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f5f3fb;
      color: #222;
    }

    /* HEADER */
    header {
      background: #ffffff;
      border-bottom: 1px solid #e6e6f0;
      padding: 14px 0;
    }

    .nav {
      width: 1100px;
      max-width: 95%;
      margin: auto;
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
      width: 40px;
      height: 40px;
      background: #6c5ce7;
      border-radius: 8px;
    }

    .site-name {
      font-size: 18px;
      font-weight: bold;
      color: #5b3dd3;
    }

    .nav-actions a {
      margin-left: 16px;
      text-decoration: none;
      font-weight: bold;
      color: #6c5ce7;
    }

    /* HERO SECTION */
    main {
      width: 1100px;
      max-width: 95%;
      margin: 60px auto;
      display: flex;
      align-items: center;
    }

    .hero-text {
      flex: 1;
    }

    .hero-line {
      font-size: 36px;
      margin-bottom: 16px;
      color: #2d2a55;
      letter-spacing: 0.5px;
      font-weight: bold;
    }

    .hero-line span {
      margin: 0 12px;
      color: #6c5ce7;
      font-weight: normal;
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

    <div class="nav-actions">
      <a href="signin.html">Sign In</a>
      <a href="signup.html">Sign Up</a>
    </div>
  </div>
</header>

<main>
  <div class="hero-text">
    <h1 class="hero-line">
      Share Surveys <span>|</span> Earn Credits <span>|</span> Support Research
    </h1>
  </div>
</main>

</body>
</html>
