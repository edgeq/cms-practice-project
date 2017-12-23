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

function find_subj_by_id($id)
{
    global $db;
    $sql = "SELECT * FROM subjects ";
    $sql .= "WHERE id='" .$id ."'";
    $result = mysqli_query($db, $sql);
    confirm_db_query($result);
    $subject = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $subject;
}

function insert_subj($subject)
{
    global $db;
    $sql = "INSERT INTO subjects ";
    $sql .= "(menu_name, position, visible) ";
    $sql .= "VALUES (";
    $sql .= "'{$subject['menu_name']}'," ;
    $sql .= "'{$subject['position']}',";
    $sql .= "'{$subject['visible']}'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    //INSERTS result in T F

    if ($result) {
        return true;
    } else {
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
}

function update_subject($subject)
{
    global $db;
    $sql = "UPDATE subjects SET ";
    $sql .= "menu_name='" . $subject['menu_name'] . "', ";
    $sql .= "position='" . $subject['position'] . "', ";
    $sql .= "visible='" . $subject['visible'] . "' ";
    $sql .= "WHERE id='" . $subject['id'] . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);
    //For UPDATE statements, the result is T or F.
    if ($result) {
        return true;
    } else {
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
}

function delete_subject($id)
{
    global $db;
    $sql = "DELETE from subjects ";
    $sql .= "WHERE id='" . $id . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);

    //DELETE requests result in T or F.
    if ($result) {
        return true;
    } else {
        //DELETE failed
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
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
