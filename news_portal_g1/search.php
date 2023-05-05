<?php
$servername = "localhost";
$database = "news_portal";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the search query from the form
$search = $_GET['search'];

// Prepare the SQL query to search the database
$sql = "SELECT * FROM 'news' WHERE `content` LIKE '%$search%'";



// Execute the query and get the results
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
  // Output the results in a table
  echo "<table>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['column1'] . "</td><td>" . $row['column2'] . "</td></tr>";
  }
  echo "</table>";
} else {
  // Output a message if there are no results
  echo "No results found.";
}

// Close the database connection
$conn->close();
?>