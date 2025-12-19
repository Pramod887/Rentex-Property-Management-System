<?php
// search.php

// Check if the search query is submitted
if (isset($_GET['search_query'])) {
  // Retrieve the search query from the GET parameter
  $searchQuery = $_GET['search_query'];

  // Perform the search query on the 'addhome' table
  include '../Config/connection.php';
  
  $query = "SELECT * FROM addhome WHERE h_add LIKE '%$searchQuery%'";
  $result = $conn->query($query);

  // Display the search results
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_object()) {
      // Display the search results as per your requirement
      echo "Property Name: " . $row->h_name . "<br>";
      echo "Address: " . $row->h_add . "<br>";
      // You can display other relevant information as needed
      echo "<br>";
    }
  } else {
    echo "No results found.";
  }

  // Close the database connection
  $conn->close();
} else {
  // Redirect to the home page or display an error message if the search query is not provided
  header("Location: home.php");
  exit();
}
?>
