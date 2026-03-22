<?php
session_start();
include("database/db.php");

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['student_id'];
    $password = $_POST['password'];

    $query = "SELECT * FROM students WHERE student_id='$id' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['student_id'] = $id;
        // header("Location: student_result.php?id=$id");
        header("Location: std_result_1.php?id=$id");
        // header("Location: studentstd_result_1.php?id=$id");
        exit();
    } else {
        $error = "Invalid Login";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f4f8;
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
            background-color: lightblue;
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
        <h1>Student Login</h1>

        Student ID<br>
        <input type="text" name="student_id" required><br><br>

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
