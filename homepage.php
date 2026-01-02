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

    .hero-text p {
      font-size: 18px;
      color: #555;
      line-height: 1.6;
      margin-bottom: 24px;
    }

    .hero-text strong {
      color: #5b3dd3;
    }

    .hero-buttons a {
      display: inline-block;
      padding: 12px 20px;
      margin-right: 10px;
      border-radius: 6px;
      font-weight: bold;
      text-decoration: none;
      font-size: 15px;
    }

    .btn-primary {
      background: #6c5ce7;
      color: white;
    }

    .btn-secondary {
      border: 1px solid #6c5ce7;
      color: #6c5ce7;
      background: transparent;
    }

    /* FEATURES */
    .features {
      width: 1100px;
      max-width: 95%;
      margin: 60px auto;
      display: flex;
      gap: 20px;
    }

    .feature-card {
      background: white;
      padding: 24px;
      border-radius: 10px;
      flex: 1;
      box-shadow: 0 8px 20px rgba(92,61,196,0.08);
    }

    .feature-card h3 {
      margin-bottom: 10px;
      color: #2d2a55;
    }

    .feature-card p {
      color: #555;
      line-height: 1.5;
    }

    /* FOOTER */
    footer {
      text-align: center;
      padding: 20px;
      color: #777;
      font-size: 14px;
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

    <p>
      <strong>NeedSurveyResponses</strong> is a collaborative survey-sharing platform
      where students and researchers create opportunities by
      sharing surveys and participating in others’ research.
    </p>

    <p>
      Publish your own survey, collect responses efficiently,
      and earn credits by helping others complete their studies —
      all in one simple and structured platform.
    </p>

    <div class="hero-buttons">
      <a href="signup.html" class="btn-primary">Get Started</a>
      <a href="signin.html" class="btn-secondary">Sign In</a>
    </div>
  </div>
</main>

<section class="features">

  <div class="feature-card">
    <h3>Create and Share Surveys</h3>
    <p>
      Upload your Google Forms survey and reach a focused audience
      that is genuinely interested in participating.
    </p>
  </div>

  <div class="feature-card">
    <h3>Earn Credits by Participating</h3>
    <p>
      Complete surveys posted by others and earn credit points
      that allow you to publish your own surveys.
    </p>
  </div>

  <div class="feature-card">
    <h3>Support Academic Research</h3>
    <p>
      Contribute to meaningful academic and social research
      while helping fellow students achieve their research goals.
    </p>
  </div>

</section>

<footer>
  © 2025 NeedSurveyResponses • A collaborative survey-sharing platform
</footer>

</body>
</html>
