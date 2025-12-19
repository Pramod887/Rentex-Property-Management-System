<?php
include '../Config/connection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the values from the form
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $s_name = isset($_POST['s_name']) ? $_POST['s_name'] : '';
    $s_add = isset($_POST['s_add']) ? $_POST['s_add'] : '';
    $s_phone = isset($_POST['s_phone']) ? $_POST['s_phone'] : '';
    $s_image = isset($_POST['s_image']) ? $_POST['s_image'] : '';
    $s_detail = isset($_POST['s_detail']) ? $_POST['s_detail'] : '';
    

    // Update the record in the addhome table
    $query = "UPDATE seller SET s_name='$s_name', s_add='$s_add', s_phone='$s_phone', s_image='$s_image', s_detail='$s_detail' WHERE id='$id'";

    if ($conn->query($query)) {
        echo '<script>alert("Successfully Updated");</script>';
        echo '<script>window.location.href="viewseller.php";</script>';
        exit; // Stop executing further
    } else {
        echo '<script>alert("Update Failed");</script>';
    }
}

// Retrieve the existing record based on h_id
$id = isset($_GET['id']) ? $_GET['id'] : '';
$query = "SELECT * FROM seller WHERE id='$id'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Extract the existing values
    $s_name = $row['s_name'];
    $s_add = $row['s_add'];
    $s_phone = $row['s_phone'];
    $s_image = $row['s_image'];
    $s_detail = $row['s_detail'];
    
} else {
    echo '<script>alert("Record not found");</script>';
    echo '<script>window.location.href="viewseller.php";</script>';
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
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="h_name">Name:</label>
            <input type="text" name="s_name" value="<?php echo $s_name; ?>">

            <label for="h_add">Address:</label>
            <input type="text" name="s_add" value="<?php echo $s_add; ?>">

            <label for="h_phone">Phone:</label>
            <input type="text" name="s_phone" value="<?php echo $s_phone; ?>">

            <label for="h_image">Image:</label>
            <input type="file" name="s_image" value="<?php echo $s_image; ?>">

            <label for="h_details">Details:</label>
            <input type="text" name="s_detail" value="<?php echo $s_detail; ?>">

           

            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>
