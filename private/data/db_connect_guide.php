<?php

// This guide demonstrates the five fundamental steps
// of database interaction using PHP.

// Credentials
$dbhost = 'localhost';
$dbuser = 'edge';
$dbpass = 'password';
$dbname = 'cms_practice';

// 1. Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  //Test connection
  if (mysqli_connect_errno()) {
      $msg = "Database connection failed: ";
      $msg .= mysqli_connect_error();
      $msg .= " (" . mysqli_connect_errno() . ")";
      exit($msg);
  }

// 2. Perform database query
$query = "SELECT * FROM subjects";
$result_set = mysqli_query($connection, $query);
// 3. Use returned data (if any)
while ($subject = mysqli_fetch_assoc($result_set)) {
    echo $subject["menu_name"] . "<br />";
}

  //Test if query succeeded
  if (!$result_set) {
      exit("Database query failed.");
  }
// 4. Release returned data
mysqli_close($result_set);
// 5. Close database connection
mysqli_close($connection);
