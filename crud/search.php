<?php
$search = $_POST['search'];
$term = $_POST['searchBy'];
include "connect.php";

if ($term == 'rollno') {
    $sql = "SELECT * FROM emp1 WHERE rollno='$search'";
} else {
    $sql = "SELECT * FROM emp1 WHERE name LIKE '%$search%'";
}

$result = mysqli_query($con, $sql);
$rows = mysqli_num_rows($result);

if ($rows < 1) {
    die("<h1 style='color: red;'>Data not found</h1>");
}

// Apply green and white CSS
echo "<style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
      </style>";

echo "<table border=1 cellspacing=0>
        <tr>
            <th>Name</th>
            <th>Roll-NO</th>
            <th>Department</th>
            <th>Phone-no</th>
            <th>Samester</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>" . $row['name'] . "</td>
            <td>" . $row['rollno'] . "</td>
            <td>" . $row['dep'] . "</td>
            <td>" . $row['pno'] . "</td>
            <td>" . $row['salary'] . "</td>
          </tr>";
}

echo "</table>";
?>