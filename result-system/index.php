<!DOCTYPE html>
<html>

<head>
<title>Student Result Portal</title>
<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
font-family:Arial,sans-serif;
background: #91a9db;
text-align:center;
     /* background: linear-gradient(135deg, #2c3e50, #3498db); */
}
.navbar{
background: black;
color:#fff;
padding:10px;
display:flex;
justify-content:space-between;
align-items:center;
}
.navbar-brand{
    color: white;
}
.navbar-brand:hover{
    color: #3498db;
}


.main h1{
    justify-content:center;
    /* margin-bottom:20px; */
    margin-top:20%;
    color:white;    
}
/* .btn-light:hover{
    background: #3498db;
    color:white;
} */
.main p{
    color:white;
    font-size:20px;
}
.main a{
    background: white;
    color:black;
    padding:10px 20px;
    text-decoration:none;
    border-radius:5px;
    font-size:20px;
}
.main a:hover{
    background: #3498db;
    color:white;
}

</style>
</head>

<body>

<nav class="navbar">
<span class="navbar-brand">College System</span>
<a href="main.php"class="btn btn-light">Login</a>
</nav>

<div class="main">
<h1>University Result Portal</h1>
<p>Manage Students Results</p>
<a href="main.php">Get Started</a>
</div>

</body>
</html>

