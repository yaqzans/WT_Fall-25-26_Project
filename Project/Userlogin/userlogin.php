<?php
session_start();
include "../db.php";

$email = $password = "";
$emailErr = $passwordErr = "";
$loginErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = trim($_POST["email"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = $_POST["password"];
    }

    if ($emailErr === "" && $passwordErr === "") {

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $user = mysqli_fetch_assoc($result);

            if ($password === $user['password']) {

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_email'] = $user['email'];

                header("Location: ../DASHBOARD/DASHBOARD.php");
                exit();

            } else {
                $loginErr = "Incorrect password";
            }

        } else {
            $loginErr = "User not found";
        }
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
  <a href="../homepage/homepage.php">
  <button id="btn">Back</a></button>
  <h2>NeedSurveyResponses</h2>
</header>


<main>
  <div class="card">

    <h1>Sign In</h1>

    <?php if ($loginErr != "") { ?>
      <div class="error"><?php echo $loginErr; ?></div>
    <?php } ?>

    <form method="post">

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
        <button type="submit">Login</button>
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
