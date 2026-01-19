<!DOCTYPE html>
<html>
<head>
    <title>PHP Code</title>
</head>
<body>

<h1>Welcome to Registration</h1>

<?php
$name = "";
$email = "";
$gender = "";
$degree = "";
$blood = "";
$dd = "";
$mm = "";
$yy = "";
$nameerr = "";
$emailerr = "";
$doberr = "";
$gendererr = "";
$degreeerr = "";
$blooderr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) 
    {
        $nameerr = "Name is required";
    } 
    else 
    {
        $name = $_POST["name"];
        if (!preg_match("/^[a-zA-Z .-]* [a-zA-Z .-]+$/", $name)) {
            $nameerr = "Invalid name";
        }
    }

    if (empty($_POST["email"])) 
    {
        $emailerr = "Email is required";
    } 
    else {
        $email = $_POST["email"];
        if (!preg_match("/^[^ ]+@[^ ]+\.[a-z]{2,3}$/", $email)) {
            $emailerr = "Invalid email";
        }
    }

    if (empty($_POST["dd"]) || empty($_POST["mm"]) || empty($_POST["yy"])) 
    {
        $doberr = "Date required";
    } 
    else {
        $dd = $_POST["dd"];
        $mm = $_POST["mm"];
        $yy = $_POST["yy"];
        if ($dd < 1 || $dd > 31 || $mm < 1 || $mm > 12 || $yy < 1900 || $yy > 2025) {
            $doberr = "Invalid date";
        }
    }

    if (empty($_POST["gender"])) 
    {
        $gendererr = "Select gender";
    } 
    else {
        $gender = $_POST["gender"];
    }
    if (empty($_POST["degree"])) 
    {
        $degreeerr = "Select degree";
    } 
    else {
        $degree = $_POST["degree"];
    }
    if (empty($_POST["blood"])) 
        {
        $blooderr = "Select blood group";
    } 
    else {
        $blood = $_POST["blood"];
    }
}
?>
 
<form method="post" action="">
Name:
<input type="text" name="name" value="<?php echo $name; ?>">
<?php echo $nameerr; ?>
<br><br>

Email:
<input type="text" name="email" value="<?php echo $email; ?>">
<?php echo $emailerr; ?>
<br><br>    

Date of Birth:
<input type="text" name="dd" size="2" value="<?php echo $dd; ?>">
<input type="text" name="mm" size="2" value="<?php echo $mm; ?>">
<input type="text" name="yy" size="4" value="<?php echo $yy; ?>">
<?php echo $doberr; ?>
<br><br>

Gender:
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<?php echo $gendererr; ?>
<br><br>

Degree:
<select name="degree">
<option>Select</option>
<option value="BSc">BSc</option>
<option value="MSc">MSc</option>
<option value="PhD">PhD</option>
</select>
<?php echo $degreeerr; ?>
<br><br>

Blood Group:
<select name="blood">
<option>Select</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
</select>
<?php echo $blooderr; ?>
<br><br>

<input type="submit" value="Submit">

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameerr) && empty($emailerr) && empty($doberr) && empty($gendererr) && empty($degreeerr) && empty($blooderr)) {
    echo "<h3>Your Input:</h3>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "DOB: $dd-$mm-$yy <br>";
    echo "Gender: $gender <br>";
    echo "Degree: $degree <br>";
    echo "Blood Group: $blood <br>";
}
?>


</body>
</html>
