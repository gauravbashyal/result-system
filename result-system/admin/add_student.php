
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body { margin: 0; 
        font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 200px;
            height: 100vh;
            background: #2c3e50;
            color: white;
            padding: 15px;
            float: left;
        }
        .sidebar a {
            display: block;
            color: white;
            margin: 8px 0;
            text-decoration: none;
        }
        .content {
          margin-left: 220px;
         padding: 20px;
        }
        .sidebar #lower {
        position: absolute;
        bottom: 20px;
        left: 15px;
        }
        .sidebar a:hover {
         background: #34495e;
         padding-left: 5px;
         transition: 0.3s;
        }
        .sidebar h4{
        color: white;   
        padding-bottom: 20px;
        font-size:  30px;
        }

        </style>
    </head>

    <body>

    <div class="sidebar">
        <h4>Menu</h4>
        <a href="dashboard.php">Home</a>
        <a href="add_student.php">Add Student</a>
        <a href="add_subject.php">Add Subject</a>
        <a href="add_marks.php">Add Marks</a>

        <a id="lower" href="../logout.php">Logout</a>
    </div>


<?php
include("../database/db.php");
$msg="";
if(isset($_POST['add']))
{

$id=$_POST['id'];
$name=$_POST['name'];
$dept=$_POST['dept'];
$sem=$_POST['sem'];
$pass=$_POST['pass'];

$query="INSERT INTO students VALUES('$id','$name','$dept','$sem','$pass')";
mysqli_query($conn,$query);

$msg= "Student Added";

}
?>
<div class="content">
<form method="POST">
    <h1>Adding Students</h1><br>
Student ID<br>
<input type="text" name="id" required><br><br>

Name<br>
<input type="text" name="name" required><br><br>

Department<br>
<input type="text" name="dept" required><br><br>

Semester<br>
<input type="text" name="sem" required><br><br>

Password<br>
<input type="text" name="pass" required><br><br>

<button name="add">Add Student</button>
<br><br>
 <?php if (!empty($msg)) { ?>
        <div class="msg"><?php echo $msg; ?></div>
    <?php } ?>
    </form>
</div>

<script>
setTimeout(() => {
    document.querySelector('.msg')?.remove();
}, 3000);
</script>
</body>
</html>