<?php
$email = $password = "";
$emailErr = $passwordErr = "";
$loginMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /* EMAIL */
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = $_POST["email"];
    }

    /* PASSWORD */
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = $_POST["password"];
    }

    /* Demo login success */
    if ($emailErr == "" && $passwordErr == "") {
        $loginMsg = "Login successful (demo)";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>NeedSurveyResponses - Login</title>

  <style>
    * { box-sizing: border-box; }

    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f4f6fb;
      color: #222;
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

    main {
      display: flex;
      justify-content: center;
      padding: 40px 15px;
    }

    .card {
      width: 100%;
      max-width: 420px;
      background: #ffffff;
      padding: 28px;
      border-radius: 8px;
      box-shadow: 0 8px 20px rgba(92, 61, 196, 0.08);
    }

    h1 {
      text-align: center;
      margin-bottom: 24px;
    }

    label {
      display: block;
      margin-bottom: 4px;
      font-size: 14px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 6px;
      border-radius: 6px;
      border: 1px solid #e8e6ff;
      font-size: 14px;
    }

    .actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 10px;
    }

    .forgot a {
      font-size: 13px;
      color: #6c5ce7;
      text-decoration: none;
      font-weight: bold;
    }

    button {
      padding: 10px 18px;
      border-radius: 6px;
      border: none;
      font-weight: bold;
      cursor: pointer;
      font-size: 14px;
      background: #6c5ce7;
      color: white;
    }

    .extra {
      text-align: center;
      margin-top: 14px;
      font-size: 14px;
    }

    .extra a {
      color: #6c5ce7;
      text-decoration: none;
      font-weight: bold;
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

    <h1>Sign In</h1>

    <form method="post" action="">

      <label>Email Address</label>
      <input type="text" name="email" value="<?php echo $email; ?>">

      <label>Password</label>
      <input type="password" name="password">

      <div class="actions">
        <div class="forgot">
          <a href="#">Forgot password?</a>
        </div>
        <button type="submit">Login</button>
      </div>

    </form>

    <div class="extra">
      Don’t have an account?
      <a href="signuppage.php">Sign Up</a>
    </div>

  </div>
</main>

</body>
</html>
