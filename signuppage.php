<!DOCTYPE html>
<html>
<head>
  <title>NeedSurveyResponses - Sign Up</title>
</head>

<body>

<header>
  <div>
    <div></div>
    <div>NeedSurveyResponses</div>
  </div>
</header>

<main>
  <div>

    <h1>Create an account</h1>

    <form method="post" action="signup.php">

      <label>Full Name</label>
      <input type="text" name="fullname">

      <label>Email Address</label>
      <input type="email" name="email">

      <label>Password</label>
      <input type="password" name="password">

      <label>Confirm Password</label>
      <input type="password" name="confirm_password">

      <button type="submit">Sign Up</button>

    </form>

  </div>

</main>


</body>

<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f4f6fb;
  }

  header {
    background: #ffffff;
    border-bottom: 1px solid #e6e6f0;
    padding: 16px 0;
  }

  .nav {
    width: 900px;
    max-width: 95%;
    margin: auto;
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .logo {
    width: 42px;
    height: 42px;
    background: #6c5ce7;
    border-radius: 8px;
  }

  .site-name {
    font-size: 18px;
    font-weight: bold;
    color: #5b3dd3;
  }
</style>

</html>
