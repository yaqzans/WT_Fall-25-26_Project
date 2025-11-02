<!DOCTYPE html>
<html>
<head>
    <title> Clinic Patient Registration</title>
</head>
<body>
<center>
<h1 style = color:DarkBlue> Clinic Patient Registration</h1>
<div>
<p class = "left">
Full Name:<br>
<input type="text" class ="w"><br>
Age:<br>
<input type="text" class ="w"><br>
Phone Number:<br>
<input type="text" class ="w"><br>
Email Address:<br>
<input type="text" class ="w"><br>
Insurance Provider:<br>
<select>
    <option>              Select Provider              </option>
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
<input type="text" class ="w"><br>
Password:<br>
<input type="text" class ="w"><br>
Confirm Password:<br>
<input type="text" class ="w"><br><br>
</p>
<input type = "submit" value="Register">
</p>
</div>
</center>
</body>
<style>
div{
    border: 2px solid black;
    width: 300px;
    padding: 10px;
    background-color: Cornsilk;
}
.left{
    text-align: left;
    align: left;
}
.w{
    width: 280px;
}
</style>
</html>