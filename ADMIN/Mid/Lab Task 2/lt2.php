<!DOCTYPE html>
<html>
<head>
    <title>LT 2</title>
</head>
<body style = "background-color: #eaf3d1ff;">
<center>
<div>
<h1>Student Registration</h1> <br>
Full Name: <br>
<input type="text" id="fname"><br><br>
Email: <br>
<input type="text" id="email"><br><br>
Password: <br>
<input type="password" id="pass"><br><br>
Confirm Password: <br>
<input type="password" id="cpass"><br><br>
<button onclick="validate()">Submit</button>
</div>

<p id = result> </p>
<br>
<div>
<h1>Course Selection</h1> <br>
Please select your courses: <br>
<select>
    <option id = 1>Slot - 1</option>
    <option id = 2>Slot - 2</option>
    <option id = 3>Slot - 3</option>
    <option id = 4>Slot - 4</option>
    <option id = 5>Slot - 5</option>
</select>
<br><br>
<input type="text" id="courseEdit" placeholder="Enter new course name"> <br><br>
<input type="text" id="courseIDEdit" placeholder="Enter course ID to edit"><br><br>
<input type="text" id="courseRemoveID" placeholder="Enter course ID to remove"><br><br>
<button onclick="EditCourse()">Add</button>
<button onclick="RemoveCourse()">Remove</button>
</div>
<br><br><br>
</center>
<script>
function validate(){
    let fname = document.getElementById("fname").value;
    let email = document.getElementById("email").value;
    let pass = document.getElementById("pass").value;
    let cpass = document.getElementById("cpass").value;

    if(fname === "" || email === "" || pass === "" || cpass === ""){
        alert("All fields are required.");
        return false;
    }

    var flag = 0;
    for(let i=0; i<email.length; i++){
        let char = email.charAt(i);
        if(char == '@'){
            flag = 1;
        }
    }
    if (flag == 0){
        alert("Invalid email format.");
        return false;
    }

    if(pass !== cpass){
        alert("Passwords do not match.");
        return false;
    }

    document.getElementById("result").innerHTML =  `<b>Registration Complete!</b><br> Name: ${fname}<br> Email: ${email}<br>`
    return true;
}
function EditCourse(){
    let courseName = document.getElementById("courseEdit").value;
    if(courseName === "" || courseIDEdit.value === ""){
        alert("Please enter a course name to edit.");
        return false;
    }
    document.getElementById(document.getElementById("courseIDEdit").value).innerHTML = courseName;
    return true;
}
function RemoveCourse(){
    let courseID = document.getElementById("courseRemoveID").value;
    if(courseID === ""){
        alert("Please enter a course ID to remove.");
        return false;
    }
    document.getElementById(document.getElementById("courseRemoveID").value).innerHTML = `Slot - ${courseID} (Removed)`;
    return true;
}
</script>
<style>
div{
    border: 2px solid black;
    padding: 10px;
    width: 300px;
    margin-bottom: 20px;
    background-color: #ecefffff;
}
#result{
    border: 1px solid black;
    padding: 10px;
    width: 300px;
    background-color: #94ff52ff;
}
h1{
    background-color: #a8efffff;
}
button{
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
</style>
</body>
</html>