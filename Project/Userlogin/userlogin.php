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
  <title>NeedSurveyResponses - Login</title>
  <link rel="stylesheet" href="Userlogin.css"> 

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

    <?php if ($loginMsg != "") { ?>
      <div class="success"><?php echo $loginMsg; ?></div>
    <?php } ?>

    <form method="post" action="">

      <label>Email Address</label>
      <input type="text" name="email" value="<?php echo $email; ?>">
      <div class="error"><?php echo $emailErr; ?></div>

      <label>Password</label>
      <input type="password" name="password">
      <div class="error"><?php echo $passwordErr; ?></div>

      <div class="actions">
        <div class="forgot">
          <a href="#">Forgot password?</a>
        </div>
        <button type="submit"><a href="../DASHBOARD/DASHBOARD.php">Login</a></button>
      </div>

    </form>

    <div class="extra">
      Don’t have an account?
      <a href="../Signuppage/signuppage.php">Sign Up</a>
    </div>

  </div>
</main>

</body>
</html>
