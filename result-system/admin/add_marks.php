<!DOCTYPE html>
<html>
<head>
    <title>Add Marks</title>
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
        <a id="a_std" href="add_student.php">Add Student</a>
        <a href="add_subject.php">Add Subject</a>
        <a href="add_marks.php">Add Marks</a>

        <a id="lower" href="../logout.php">Logout</a>
    </div>

<?php
$msg="";
include("../database/db.php");

if(isset($_POST['add']))
{

$student=$_POST['student'];
$subject=$_POST['subject'];
$marks=$_POST['marks'];
$semester=$_POST['semester']; 

$query="INSERT INTO marks(student_id,subject_id,marks,semester) VALUES('$student','$subject','$marks','$semester')"; 

mysqli_query($conn,$query);

$msg="Marks Added";

}
?>
<div class="content">
<form method="POST">
    <h1>Adding Marks</h1><br><br>

Student ID<br>
<input type="text" name="student" required><br><br>

Subject ID<br>
<input type="text" name="subject" required><br><br>

Marks<br>
<input type="text" name="marks" required><br><br>

Semester<br> 
<input type="text" name="semester" required><br><br>

<button name="add">Add Marks</button><br><br>

 <?php if (!empty($msg)) { ?>
        <div class="msg alert alert-success"><?php echo $msg; ?></div>
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