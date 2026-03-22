<?php 
session_start(); 
include("database/db.php");  

if (!isset($_SESSION['student_id'])) {
    die("Please login first");
}

if (!isset($_GET['semester'])) {
    die("Select a semester first");
}

$id = $_SESSION['student_id'];
$semester = $_GET['semester'];

// get student name
$name_sql = "SELECT name FROM students WHERE student_id='$id'";
$name_result = mysqli_query($conn, $name_sql);
$student = mysqli_fetch_assoc($name_result);

// get marks
$sql = "SELECT subjects.subject_name, marks.marks
        FROM marks
        JOIN subjects ON marks.subject_id = subjects.subject_id
        WHERE marks.student_id='$id' 
        AND marks.semester='$semester'";

$result = mysqli_query($conn, $sql);

$total_marks = 0;
$count = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            justify-content: center;
        }
        .content{
            width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        table {
                width: 100%;
                border-collapse: collapse;
        }
    </style>
</head>
<body>
<div class="content">
<h2>Student Name: <?php echo $student['name']; ?></h2>
<h3>Semester: <?php echo $semester; ?></h3>

<?php if ($count > 0) { ?>
    <table border="1" cellpadding="8">
        <tr>
            <th>Subject</th>
            <th>Marks</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { 
            $total_marks += $row['marks'];
        ?>
            <tr>
                <td><?php echo $row['subject_name']; ?></td>
                <td><?php echo $row['marks']; ?></td>
            </tr>
        <?php } ?>
    </table>

    <br>

    <?php 
        $percentage = ($total_marks / ($count * 100)) * 100;
    ?>

    <p><strong>Total Marks:</strong> <?php echo $total_marks; ?></p>
    <p><strong>Percentage:</strong> <?php echo number_format($percentage, 2); ?>%</p>

<?php } else { ?>
    <p>No marks found</p>
<?php } ?>

<br>
<a href="std_result_2.php">Back</a>
</div>
</body>
</html>