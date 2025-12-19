<?php
include '../Config/connection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the values from the form
    $p_id = isset($_POST['p_id']) ? $_POST['p_id'] : '';
    $p_name = isset($_POST['p_name']) ? $_POST['p_name'] : '';
    $p_add = isset($_POST['p_add']) ? $_POST['p_add'] : '';
    $p_phone = isset($_POST['p_phone']) ? $_POST['p_phone'] : '';
    $p_image = isset($_POST['p_image']) ? $_POST['p_image'] : '';
    $p_details = isset($_POST['p_details']) ? $_POST['p_details'] : '';
    $cat = isset($_POST['cat']) ? $_POST['cat'] : '';

    // Update the record in the addhome table
    $query = "UPDATE addpg SET p_name='$p_name', p_add='$p_add', p_phone='$p_phone', p_image='$p_image', p_details='$p_details', cat='$cat' WHERE p_id='$p_id'";

    if ($conn->query($query)) {
        echo '<script>alert("Successfully Updated");</script>';
        echo '<script>window.location.href="viewpg.php";</script>';
        exit; // Stop executing further
    } else {
        echo '<script>alert("Update Failed");</script>';
    }
}

// Retrieve the existing record based on h_id
$p_id = isset($_GET['p_id']) ? $_GET['p_id'] : '';
$query = "SELECT * FROM addpg WHERE p_id='$p_id'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Extract the existing values
    $p_name = $row['p_name'];
    $p_add = $row['p_add'];
    $p_phone = $row['p_phone'];
    $p_image = $row['p_image'];
    $p_details = $row['p_details'];
    $cat = $row['cat'];
} else {
    echo '<script>alert("Record not found");</script>';
    echo '<script>window.location.href="viewpg.php";</script>';
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
            <input type="hidden" name="p_id" value="<?php echo $p_id; ?>">
            <label for="h_name">Name:</label>
            <input type="text" name="p_name" value="<?php echo $p_name; ?>">

            <label for="h_add">Address:</label>
            <input type="text" name="p_add" value="<?php echo $p_add; ?>">

            <label for="h_phone">Price:</label>
            <input type="text" name="p_phone" value="<?php echo $p_phone; ?>">

            <label for="h_image">Image:</label>
            <input type="file" name="p_image" value="<?php echo $p_image; ?>">

            <label for="h_details">Details:</label>
            <input type="text" name="p_details" value="<?php echo $p_details; ?>">

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
