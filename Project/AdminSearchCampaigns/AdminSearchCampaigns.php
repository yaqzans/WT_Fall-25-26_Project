<!DOCTYPE html>
<html>
<head>
<title>Admin Search Campaign Page</title>
</head>

<body>
<header> 
<button id="btn">← Back</button>
<h2>NeedSurveyResponses</h2>
</header>

<section>
<div id="searchBox">
    <input type="text" placeholder="Search by Survey ID or Status">
</div>
<div id="layout">
    <div id="left">
        <div id="box">
            <h3>Surveys</h3>
            <div id="surveyItem">
                <b>Survey ID:</b> 101<br>
                <span id="meta">Status: Open</span><br>
                <span id="meta">Responses: 4 / 10</span><br>
                <span id="meta">Date: 13/03/25</span>
            </div>
            <div id="surveyItem">
                <b>Survey ID:</b> 102<br>
                <span id="meta">Status: Closed</span><br>
                <span id="meta">Responses: 10 / 10</span><br>
                <span id="meta">Date: 10/03/25</span>
            </div>
            <div id="surveyItem">
                <b>Survey ID:</b> 103<br>
                <span id="meta">Status: Closed</span><br>
                <span id="meta">Responses: 8 / 8</span><br>
                <span id="meta">Date: 08/03/25</span>
            </div>
                <div id="surveyItem">
                <b>Survey ID:</b> 105<br>
                <span id="meta">Status: Closed</span><br>
                <span id="meta">Responses: 6 / 10</span><br>
                <span id="meta">Date: 31/01/25</span>
            </div>
        </div>
    </div>
    <div id="right">
        <div id="box">
            <h3>Transactions</h3>
            <div id="transactionItem">
                User ID: 112<br>
                Survey ID: 101<br>
                Credits: +1
            </div>
            <div id="transactionItem">
                User ID: 117<br>
                Survey ID: 101<br>
                Credits: +1
            </div>
            <div id="transactionItem">
                User ID: 109<br>
                Survey ID: 101<br>
                Credits: +1
            </div>
        </div>
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
    max-width: 1100px;
    margin: auto;
    padding: 20px;
}

#searchBox {
    margin-bottom: 20px;
}

#searchBox input {
    width: 57.5%;
    padding: 6px;
}

#layout {
    display: flex;
    gap: 20px;
}

#left {
    width: 60%;
}

#right {
    width: 40%;
}

#box {
    background: white;
    padding: 20px;
    border-radius: 10px;
}

#surveyItem {
    background: #f7f7ff;
    padding: 10px;
    border-radius: 6px;
    margin-bottom: 10px;
}

#transactionItem {
    background: #f7f7ff;
    padding: 10px;
    border-radius: 6px;
    margin-bottom: 10px;
    font-size: 14px;
}

#meta {
    color: gray;
    font-size: 13px;
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
