<?php
include '../Config/connection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the values from the form
    $h_id = isset($_POST['h_id']) ? $_POST['h_id'] : '';
    $h_name = isset($_POST['h_name']) ? $_POST['h_name'] : '';
    $h_add = isset($_POST['h_add']) ? $_POST['h_add'] : '';
    $h_phone = isset($_POST['h_phone']) ? $_POST['h_phone'] : '';
    $h_image = isset($_POST['h_image']) ? $_POST['h_image'] : '';
    $h_details = isset($_POST['h_details']) ? $_POST['h_details'] : '';
    $cat = isset($_POST['cat']) ? $_POST['cat'] : '';

    // Update the record in the addhome table
    $query = "UPDATE addhome SET h_name='$h_name', h_add='$h_add', h_phone='$h_phone', h_image='$h_image', h_details='$h_details', cat='$cat' WHERE h_id='$h_id'";

    if ($conn->query($query)) {
        echo '<script>alert("Successfully Updated");</script>';
        echo '<script>window.location.href="viewhome.php";</script>';
        exit; // Stop executing further
    } else {
        echo '<script>alert("Update Failed");</script>';
    }
}

// Retrieve the existing record based on h_id
$h_id = isset($_GET['h_id']) ? $_GET['h_id'] : '';
$query = "SELECT * FROM addhome WHERE h_id='$h_id'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Extract the existing values
    $h_name = $row['h_name'];
    $h_add = $row['h_add'];
    $h_phone = $row['h_phone'];
    $h_image = $row['h_image'];
    $h_details = $row['h_details'];
    $cat = $row['cat'];
} else {
    echo '<script>alert("Record not found");</script>';
    echo '<script>window.location.href="viewhome.php";</script>';
    exit; // Stop executing further
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Property</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: grid;
            grid-gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Update Property</h1>
        <form method="POST" action="">
            <input type="hidden" name="h_id" value="<?php echo $h_id; ?>">
            <label for="h_name">Name:</label>
            <input type="text" name="h_name" value="<?php echo $h_name; ?>">

            <label for="h_add">Address:</label>
            <input type="text" name="h_add" value="<?php echo $h_add; ?>">

            <label for="h_phone">Price:</label>
            <input type="text" name="h_phone" value="<?php echo $h_phone; ?>">

            <label for="h_image">Image:</label>
            <input type="file" name="h_image" value="<?php echo $h_image; ?>">

            <label for="h_details">Details:</label>
            <input type="text" name="h_details" value="<?php echo $h_details; ?>">

            <label class="col-md-12 p-0" for="cat"> choose a categories</label>
                                        <div class="col-md-12 border-bottom p-0">
                                          <select  name="cat">
                                            <option value="purchase">purchase</option>
                                            <option value="Rent">Rent</option>  </select>

            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>