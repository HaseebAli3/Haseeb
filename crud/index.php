<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 10px 0;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a {
            color: white;
            text-decoration: none;
        }

        button a {
            color: white;
            text-decoration: none;
        }

        button:hover {
            background-color: #45a049;
        }

        form {
            text-align: center;
            margin: 20px 0;
            border: 1px solid #ddd;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form label {
            font-size: 18px;
            margin-bottom: 10px;
            display: block;
            color: #333;
        }

        form select,
        form input,
        form button {
            width: calc(33% - 10px); /* Adjusted width for each element */
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            display: inline-block;
        }

        form select {
            margin-right: 5px;
        }

        form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #45a049;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud method</title>
</head>

<body>
    <button>
        <a href="insert.php">Add user</a>
    </button>
    <form action="search.php" method="post">
        <label for="searchBy">Search By:</label>
        <select name="searchBy" id="searchBy">
            <option value="name">Name</option>
            <option value="rollno">Roll Number</option>
        </select>
        <input type="text" name="search" placeholder="Search term">
        <button type="submit">Search</button>
    </form>

    <table cellspacing="0">
        <?php
       include "connect.php";
        $sql = "select * from emp1";
        $result = mysqli_query($con, $sql);
        echo "<table><tr><th>Name</th><th>Roll-No</th><th>Department</th><th>Phone-no</th><th>Samester</th><th colspan=2>OPERATIONS</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['sr'];
            echo "<tr><td>" . $row["name"] . "</td>";
            echo "<td>" . $row["rollno"] . "</td>";
            echo "<td>" . $row["dep"] . "</td>";
            echo "<td>" . $row["pno"] . "</td>";
            echo "<td>" . $row["salary"] . "</td>";
            echo "<td><button><a href='updatedata.php? updateid=$id'>update</a></button></td>";
            echo "<td><button><a href='delete.php? deleteid=$id'>Delete</a></button></td></tr>";
        }
        echo "</table>"
        ?>
    </body>
    
    </html>