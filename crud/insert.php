<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    .container {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.container input,
label {
    display: block;
    width: 80%;
    margin: auto;
    margin-bottom: 15px;
}

.container input {
    padding: 10px;
    border: 1px solid #2ecc71; /* Green border color */
    border-radius: 4px;
}

.container label {
    font-size: 18px;
    color: #333; /* Dark grey text color */
}

.container button {
    background-color: #2ecc71; /* Green button color */
    color: #fff;
    cursor: pointer;
    padding: 12px;
    border: none;
    border-radius: 4px;
    display: block;
    margin: auto;
    font-size: 18px;
}

.container button:hover {
    background-color: #27ae60; /* Darker green color on hover */
}

#button {
    text-decoration: none;
    color: white;
}
</style>
    <script src="script.js"></script>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data insertion</title>
</head>

<body>
    <form method="post" action="inserted.php" id="data">
        <div class="container">
            <h1></h1>
            <label for="name">Enter your name</label>
            <input type="text" id="name" name="name">
            <label for="rollno">Enter your roll no</label>
            <input type="text" class="input" id="rollno" name="rollno">
            <label for="Department">Enter your Department</label>
            <input type="text"class="input" id="Department" name="Department">
            <label for="pno">Enter your Phone no</label>
            <input type="text" class="input" id="pno" name="pno">
            <label for="salary">Enter your Samester Number</label>
            <input type="text" class="input"id="salary" name="salary">
            <button type="submit" id="submit" onclick="return validateform()">submit</button>
            
        </div>

    </form>
</body>

</html>