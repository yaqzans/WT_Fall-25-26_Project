<?php
include "../config.php";


$name = $email = $password = $confirm_password = "";
$nameErr = $emailErr = $passwordErr = $confirmErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /* NAME */
    if (empty($_POST["fullname"])) {
        $nameErr = "Name is required";
    } else {
        $name = trim($_POST["fullname"]);
    }

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

    /* INSERT INTO DATABASE */
    if (
        empty($nameErr) &&
        empty($emailErr) &&
        empty($passwordErr) &&
        empty($confirmErr)
    ) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (fullname, email, password)
                VALUES ('$name', '$email', '$hashedPassword')";

        if (mysqli_query($conn, $sql)) {
            header("Location: dashboard.php");
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
<meta charset="UTF-8">
<title>NeedSurveyResponses - Sign Up</title>

<style>
* { box-sizing: border-box; }

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

main {
  display: flex;
  justify-content: center;
  padding: 40px 15px;
}

.card {
  width: 100%;
  max-width: 520px;
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

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 6px;
  border-radius: 6px;
  border: 1px solid #e8e6ff;
}

.password-info {
  font-size: 12px;
  color: #555;
  margin-bottom: 8px;
}

.error {
  color: red;
  font-size: 13px;
  margin-bottom: 10px;
}

.show-pass {
  font-size: 13px;
  margin-bottom: 10px;
}

.actions {
  display: flex;
  justify-content: flex-end;
  gap: 10px;
}

button {
  padding: 10px 16px;
  border-radius: 6px;
  border: none;
  font-weight: bold;
}

.btn-secondary {
  background: transparent;
  border: 1px solid #ddd;
}

.btn-primary {
  background: #6c5ce7;
  color: white;
}
</style>

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
  <div class="nav">
    <div class="logo"></div>
    <div class="site-name">NeedSurveyResponses</div>
  </div>
</header>

<main>
<div class="card">

<h1>Create an account</h1>

<form method="post">

<label>Full Name</label>
<input type="text" name="fullname" value="<?php echo $name; ?>">
<div class="error"><?php echo $nameErr; ?></div>

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
<button type="reset" class="btn-secondary">Discard</button>
<button type="submit" class="btn-primary">Sign Up</button>
</div>

</form>

</div>
</main>

</body>
</html>
