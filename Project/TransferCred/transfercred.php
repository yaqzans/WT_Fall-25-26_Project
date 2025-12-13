<!DOCTYPE html>
<html>
<head>
<title>Transfer Credits</title>
</head>
<body>
<header> 
<button id="btn">← Back</button>
<h2>NeedSurveyResponses</h2>
</header>
<section>
<div id="box">
<h3>Transfer Credits</h3>
<p>User ID: <b id = "uid">XYZ</b><span style="margin-left: 15px;">Credits: <b>42</b></p>
Receiver User ID:<br>
<input type="text" style="width: 300px;" placeholder="Enter user ID"><br><br>

Confirm Receiver ID:<br>
<input type="text" style="width: 300px;" placeholder="Re-enter user ID"><br><br>

Amount to Transfer:<br>
<input type="number" style="width: 170px;" placeholder="Enter transfer amount"><br><br>

<button id="btncol">Confirm Transfer</button>
</div>
</section>
<footer>
Contact us:
<a href="mailto:shamvi.abdullah@gmail.com">click here</a>
</footer>
<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f5fb;
}

header {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px 30px;
    background: #7b6cf6;
    color: white;
}

section {
    max-width: 800px;
    margin: auto;
    padding: 40px 20px;
}

#btn {
    background: white;
    border: none;
    padding: 6px 12px;
    border-radius: 6px;
    cursor: pointer;
}

#box {
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

input {
    padding: 6px;
}

#btncol {
    background: #7b6cf6;
    color: white;
    cursor: pointer;
    padding: 8px 16px;
    border: none;
    border-radius: 6px;
}

footer {
    text-align: center;
    padding: 10px;
    background: white;
    border-top: 1px solid #ddd;
    position: fixed;
    bottom: 0;
    width: 98.7%;
    font-size: 12px;
}

footer a {
    color: #5b4df5;
}
::placeholder {
    font-size: 14px;
}

</style>
</body>
</html>