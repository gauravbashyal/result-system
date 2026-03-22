

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
        <a href="std_result_1.php">Home</a>
        <a href="std_result_2.php">Result</a>
        <a id="lower" href="main.php">Logout</a>
    </div>


</body>
</html>