<?php
include '../Config/connection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the values from the form
    $f_id = isset($_POST['f_id']) ? $_POST['f_id'] : '';
    $f_name = isset($_POST['f_name']) ? $_POST['f_name'] : '';
    $f_add = isset($_POST['f_add']) ? $_POST['f_add'] : '';
    $f_phone = isset($_POST['f_phone']) ? $_POST['f_phone'] : '';
    $f_image = isset($_POST['f_image']) ? $_POST['f_image'] : '';
    $f_details = isset($_POST['f_details']) ? $_POST['f_details'] : '';
    $cat = isset($_POST['cat']) ? $_POST['cat'] : '';

    // Update the record in the addhome table
    $query = "UPDATE addflat SET f_name='$f_name', f_add='$f_add', f_phone='$f_phone', f_image='$f_image', f_details='$f_details', cat='$cat' WHERE f_id='$f_id'";

    if ($conn->query($query)) {
        echo '<script>alert("Successfully Updated");</script>';
        echo '<script>window.location.href="viewflat.php";</script>';
        exit; // Stop executing further
    } else {
        echo '<script>alert("Update Failed");</script>';
    }
}

// Retrieve the existing record based on h_id
$f_id = isset($_GET['f_id']) ? $_GET['f_id'] : '';
$query = "SELECT * FROM addflat WHERE f_id='$f_id'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Extract the existing values
    $f_name = $row['f_name'];
    $f_add = $row['f_add'];
    $f_phone = $row['f_phone'];
    $f_image = $row['f_image'];
    $f_details = $row['f_details'];
    $cat = $row['cat'];
} else {
    echo '<script>alert("Record not found");</script>';
    echo '<script>window.location.href="viewflat.php";</script>';
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
            <input type="hidden" name="f_id" value="<?php echo $f_id; ?>">
            <label for="h_name">Name:</label>
            <input type="text" name="f_name" value="<?php echo $f_name; ?>">

            <label for="h_add">Address:</label>
            <input type="text" name="f_add" value="<?php echo $f_add; ?>">

            <label for="h_phone">Price:</label>
            <input type="text" name="f_phone" value="<?php echo $f_phone; ?>">

            <label for="h_image">Image:</label>
            <input type="file" name="f_image" value="<?php echo $f_image; ?>">

            <label for="h_details">Details:</label>
            <input type="text" name="f_details" value="<?php echo $f_details; ?>">

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
