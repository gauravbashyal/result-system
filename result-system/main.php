<!DOCTYPE html>
<html>

<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
font-family:Arial,sans-serif;
background: #91a9db;
text-align:center;
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
 margin-top:20px;
}
.student, .admin {
    display: inline-block;
    margin: 10px;
    padding: 20px;
}
.btn-light{
    margin-top:20px;
    padding:10px 15px;
    font-size:18px;
}
a{
    text-decoration:none;
    color:white;
}
</style>
</head>

<body>
<nav class="navbar">
<span class="navbar-brand"><a href="index.php">College System</a></span>
</nav>

<div class="main">
    <h1>Please select your login type:</h1>

    <div class="student">
    <a href="student_login.php" class="btn btn-light">Student Login</a>
    </div>
    
    <div class="admin">
    <a href="admin/admin_login.php" class="btn btn-light">Admin Login</a>

</div>

</body>
</html>