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

function find_all_pages()
{
    global $db;

    $sql = "SELECT * FROM pages ";
    $sql .= "ORDER BY subject_id, position ASC";
    $result = mysqli_query($db, $sql);
    confirm_db_query($result);
    return $result;
}

/*
DONE: Connect to db, retrieve records from pages, list out page attributes
DONE: use the existing db connection (reference initialize.php for connection var)
DONE: query pages table for all records, sorted by Position
DONE: put query in a function find_all_pages()
DONE: Use a while loop to get through result set
DONE: Free result set when done
DONE: Confirm the database connection is being closed
DONE: Handle errors on the connection and query_functions

*/
