<!DOCTYPE html>
<html>
<head>
    <title> Clinic Patient Registration</title>
</head>
<body>
<center>
<h2 style = color:DarkBlue> Clinic Patient Registration</h2>
<div>
<p class = "left">
Full Name:<br>
<input type="text" class ="w"><br><br>
Age:<br>
<input type="text" class ="w"><br><br>
Phone Number:<br>
<input type="text" class ="w"><br><br>
Email Address:<br>
<input type="text" class ="w"><br><br>
Insurance Provider:<br>
<select class ="w">
    <option>Select Provider</option>
    <option>Provider A</option>
    <option>Provider B</option>
    <option>Provider C</option>
</select>
<br><br>
Insurance Policy Number:<br>
<input type="text" class ="w"><br>
<h3 style = color:DarkBlue>Additional Information</h3>
<p class = "left">
Username:<br>
<input type="text" class ="w"><br><br>
Password:<br>
<input type="text" class ="w"><br><br>
Confirm Password:<br>
<input type="text" class ="w"><br>
</p>
<input type = "submit" value="Register" class = "w" style = "background:DarkBlue; color:White; padding :8px">
</p>
</div>
</center>
</body>
<style>
div{
    border: 1px solid black;
    width: 350px;
    padding: 10px;
    background-color: OldLace;
}
.left{
    text-align: left;
    align: left;
    font-weight: bold;
    font-family: Arial;
    font-size: 14px;
}
.w{
    width: 340px;
}
</style>
</html>