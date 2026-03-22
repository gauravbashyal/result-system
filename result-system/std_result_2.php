<!-- $semester = isset($_GET['semester']) ? $_GET['semester'] : ''; -->
<!DOCTYPE html>
<html>
<head>
    <title>Add Marks</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            width: 200px;
            height: 100vh;
            background: #2c3e50;
            color: white;
            padding: 15px;
            position: fixed;
        }

        .sidebar h4 {
            font-size: 30px;
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            color: white;
            margin: 8px 0;
            text-decoration: none;
            padding: 5px;
        }

        .sidebar a:hover {
            background: #34495e;
            padding-left: 10px;
            transition: 0.3s;
        }

        #lower {
            position: absolute;
            bottom: 20px;
            left: 15px;
        }

        .content {
            margin-left: 220px;
            padding: 20px;
        }

        .dashboard {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            max-width: 800px;
            margin: 50px auto;
        }

        .sem-card {
            background: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            text-decoration: none;
            color: black;
            font-weight: bold;
            transition: 0.3s;
        }

        .sem-card:hover {
            background: #003366;
            color: white;
            transform: scale(1.05);
        }
        .text-center{
            text-align: center;
            font-weight: bold;
            margin-top: 50px;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <h4>Menu</h4>
        <a href="std_result_1.php">Home</a>
        <a href="std_result_2.php">Result</a>
        <a id="lower" href="index.php">Logout</a>
    </div>

    <div class="content">
        <h1 class="text-center">Select Semester to View Result</h1>

        <div class="dashboard">
            <a class="sem-card" href="student_result.php?semester=1">Semester 1</a>
            <a class="sem-card" href="student_result.php?semester=2">Semester 2</a>
            <a class="sem-card" href="student_result.php?semester=3">Semester 3</a>
            <a class="sem-card" href="student_result.php?semester=4">Semester 4</a>
            <a class="sem-card" href="student_result.php?semester=5">Semester 5</a>
            <a class="sem-card" href="student_result.php?semester=6">Semester 6</a>
            <a class="sem-card" href="student_result.php?semester=7">Semester 7</a>
            <a class="sem-card" href="student_result.php?semester=8">Semester 8</a>
        </div>
    </div>

</body>
</html>