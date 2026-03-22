<?php
include("../database/db.php");
$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        header("Location: dashboard.php");
        exit();
    } else {
        $error= "Wrong Login";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        background-color: #f2f4f8;
        align-items: center;
    }
   .error {
    color: red;
    background-color: #ffe6e6;
    padding: 8px;
    border-radius: 4px;
    text-align: center;
    margin-bottom: 10px;
}
    .contain {
        width: 400px;
        margin: 40px auto;
        padding: 20px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h1 {
        text-align: center;
        color: #333;
    }
    input[type="text"], input[type="password"] {
        width: 100%;
        padding: 8px;
        margin: 7px 0;
        box-sizing: border-box;
    }
    button {
        width: 100%;
        padding: 10px;
        background-color:lightblue;
        color: black;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    </style>
</head>
<body>
<div class="contain">
    <form method="POST">
    <h1>Admin Login</h1>

    Username<br>
    <input type="text" name="username" required><br><br>

    Password<br>
    <input type="password" name="password" required><br><br>
    <?php if (!empty($error)) { ?>
        <div class="error"><?php echo $error; ?></div>
    <?php } ?>
    <button type="submit">Login</button>
    
    </form>
</div>
<script>
setTimeout(() => {
    document.querySelector('.error')?.remove();
}, 3000);
</script>
</body>
</html>
