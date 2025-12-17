<!DOCTYPE html>
<html>
<head>
<title>Admin Search User Page</title>
</head>

<body>

<header> 
<button id="btn">← Back</button>
<h2>NeedSurveyResponses</h2>
</header>

<section>
<div id="searchBox">
    <input type="text" placeholder="Search by User ID">
</div>
<div id="box">
    <h3>Users</h3>
    <div id="userItem">
        User ID: 101
    </div>
    <div id="userItem">
        User ID: 102
    </div>
    <div id="userItem">
        User ID: 103
    </div>
    <div id="userItem">
        User ID: 104
    </div>
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

#btn {
    background: white;
    border: none;
    padding: 6px 12px;
    border-radius: 6px;
    cursor: pointer;
}

section {
    max-width: 800px;
    margin: auto;
    padding: 20px;
}

#box {
    background: white;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
}

#userItem {
    background: #f7f7ff;
    padding: 10px;
    border-radius: 6px;
    margin-bottom: 10px;
}

#searchBox {
    margin-bottom: 20px;
}

#searchBox input {
    width: 98%;
    padding: 6px;
}

footer {
    text-align: center;
    padding: 10px;
    background: white;
    border-top: 1px solid #ddd;
    position: fixed;
    bottom: 0px;
    width: 98.3%;
    font-size: 12px;
}

footer a {
    color: #5b4df5;
}
</style>

</body>
</html>
