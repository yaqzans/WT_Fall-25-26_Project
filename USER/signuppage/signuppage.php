<?php
include "../db.php";

$email = $password = $confirm_password = "";
$emailErr = $passwordErr = $confirmErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /* EMAIL */
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = trim($_POST["email"]);
    }

    /* PASSWORD */
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = $_POST["password"];

        if (strlen($password) < 8) {
            $passwordErr = "Password must be at least 8 characters";
        } elseif (!preg_match("/[a-z]/", $password)) {
            $passwordErr = "Password must contain at least 1 lowercase letter";
        } elseif (!preg_match("/[A-Z]/", $password)) {
            $passwordErr = "Password must contain at least 1 uppercase letter";
        } elseif (!preg_match("/[0-9]/", $password)) {
            $passwordErr = "Password must contain at least 1 number";
        } elseif (!preg_match("/[\W]/", $password)) {
            $passwordErr = "Password must contain at least 1 special character";
        }
    }

    /* CONFIRM PASSWORD */
    if (empty($_POST["confirm_password"])) {
        $confirmErr = "Confirm password is required";
    } else {
        $confirm_password = $_POST["confirm_password"];
        if ($password !== $confirm_password) {
            $confirmErr = "Passwords do not match";
        }
    }

    /* INSERT USER + CREATE PROFILE WITH 0 CREDITS */
    if (
        empty($emailErr) &&
        empty($passwordErr) &&
        empty($confirmErr)
    ) {

        $sql = "INSERT INTO users (email, password)
                VALUES ('$email', '$password')";

        if (mysqli_query($conn, $sql)) {

            /* GET NEW USER ID */
            $newUserId = mysqli_insert_id($conn);

            /* CREATE PROFILE WITH 0 CREDITS */
            mysqli_query(
                $conn,
                "INSERT INTO profiles (user_id, credits)
                 VALUES ($newUserId, 0)"
            );

            header("Location: ../DASHBOARD/DASHBOARD.php");
            exit();

        } else {
            $emailErr = "Email already exists";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>NeedSurveyResponses - Sign Up</title>
<link rel="stylesheet" href="signuppage.css">

<script>
function togglePassword() {
    var p1 = document.getElementById("password");
    var p2 = document.getElementById("confirm_password");

    if (p1.type === "password") {
        p1.type = "text";
        p2.type = "text";
    } else {
        p1.type = "password";
        p2.type = "password";
    }
}
</script>
</head>

<body>

<header>
  <button id="btn"><a href="../homepage/homepage.php"><- Back</a></button>
  <h2>NeedSurveyResponses</h2>
</header>

<main>
<div class="card">

<h1>Create an account</h1>

<form method="post">

<label>Email</label>
<input type="text" name="email" value="<?php echo $email; ?>">
<div class="error"><?php echo $emailErr; ?></div>

<label>Password</label>
<input type="password" name="password" id="password">

<div class="password-info">
• Minimum 8 characters<br>
• 1 lowercase<br>
• 1 uppercase<br>
• 1 number<br>
• 1 special character
</div>
<div class="error"><?php echo $passwordErr; ?></div>

<label>Confirm Password</label>
<input type="password" name="confirm_password" id="confirm_password">
<div class="error"><?php echo $confirmErr; ?></div>

<div class="show-pass">
<input type="checkbox" onclick="togglePassword()"> Show Password
</div>

<div class="actions">
<button type="reset" class="btn-secondary">
  <a href="../Homepage/Homepage.php">Discard</a>
</button>
<button type="submit" class="btn-primary">Sign Up</button>
</div>

</form>

</div>
</main>

</body>
</html>
