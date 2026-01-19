<!DOCTYPE html>
<html>
<head>
  <title>Participant Registration</title>
  <style>
    body {
      background: #bfecffff;
    }
    h2 {
      text-align: center;
    }
    #regBox {
      width: 320px;
      background: #fbf9f9ff;
      padding: 18px;
      margin: 0 auto;
      border-radius: 8px;
    }
    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }
    input {
      width: 95%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #999;
      border-radius: 4px;
    }
    button {
      padding: 10px;
      margin-top: 15px;
      background: #002b50;
      color: white;
      border: none;
      cursor: pointer;
    }
    #result {
      margin-top: 20px;
      text-align: center;
      color: #002b50;
      font-size: 16px;
    }
    #activity-box {
      width: 320px;
      background: #fbf9f9ff;
      padding: 18px;
      margin: 0 auto;
      border-radius: 8px;
    }
  </style>
</head>
<body>
<center><h2>Participant Registration</h2></center>

<div id="regBox">
  <form onsubmit="return validateForm()">
    
    <label>Full Name:</label>
    <input type="text" id="pname">

    <label>Email:</label>
    <input type="email" id="pemail">

    <label>Phone Number:</label>
    <input type="text" id="pphone">

    <label>Password:</label>
    <input type="password" id="ppass">

    <label>Confirm Password:</label>
    <input type="password" id="pconf">

    <button type="submit">Register</button>

  </form>
</div>

<div id="result"></div>

<script>
  function validateForm() {
    var name = document.getElementById("pname").value.trim();
    var email = document.getElementById("pemail").value.trim();
    var phone = document.getElementById("pphone").value.trim();
    var pass = document.getElementById("ppass").value;
    var conf = document.getElementById("pconf").value;
    var output = document.getElementById("result");
    output.innerHTML = "";
    if (name === "" || email === "" || phone === "" || pass === "" || conf === "") {
      alert("Please fill all the fields.");
      return false;
    }
    if (isNaN(phone)) {
      alert("Phone number must be numeric.");
      return false;
    }
    if (pass !== conf) {
      alert("Passwords do not match.");
      return false;
    }
    output.innerHTML =
    
      "<b>Registration Successful!</b><br><br>" +
      "Name: " + name + "<br>" +
      "Email: " + email + "<br>" +
      "Phone: " + phone;

    return false; 
  }

</script>

<div id="activity-box">
  <h2>Activity Selection</h2>

  <label>Activity Name:</label>
  <input type="text">

  <button type="button">Add Activity</button> <br>
    Hello <br>
    <button type="button">Remove</button>
</div>

</body>
</html>
