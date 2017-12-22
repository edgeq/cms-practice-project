<?php

function find_all_subjects()
{
    global $db;

    $sql = "SELECT * FROM subjects ";
    $sql .= "ORDER BY position ASC";
    // echo $sql;
    $result = mysqli_query($db, $sql);
    confirm_db_query($result);
    return $result;
}

/*
TODO: Connect to db, retrieve records from pages, list out page attributes
TODO: use the existing db connection (reference initialize.php for connection var)
TODO: query pages table for all records, sorted by Position
TODO: put query in a function find_all_pages()
TODO: Use a while loop to get through result set
TODO: Free result set when done
TODO: Confirm the database connection is being closed
TODO: Handle errors on the connection and query_functions



*/
