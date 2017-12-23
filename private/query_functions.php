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
function find_page_by_id($id)
{
    global $db;
    $sql = "SELECT * FROM pages ";
    $sql .= "WHERE page_id='" .$id ."'";
    $result = mysqli_query($db, $sql);
    confirm_db_query($result);
    $page = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $page;
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

function update_page($page)
{
    global $db;
    $sql = "UPDATE pages SET ";
    $sql .= "page_name='" . $page['page_name'] . "', ";
    $sql .= "page_content='" . $page['page_content'] . "', ";
    $sql .= "published='" . $subject['published'] . "' ";
    $sql .= "WHERE page_id='" . $page['page_id'] . "' ";
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

function delete_page($id)
{
    global $db;
    $sql = "DELETE from pages ";
    $sql .= "WHERE page_id='" . $id . "' ";
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

/*
TODO: develop CRUD for pages
DONE: read back a single page '/staff/pages/show.php'
DONE: create a page '/staff/pages/new.php'
DONE: update a page '/staff/pages/edit.php'
TODO: delete a page '/staff/pages/delete.php'
TODO: work on Select option for position on each pages
  look through the db to see how many pages and loop through count of pages to display equal amount of options.
  Check to see if the current value matches at each loop position
TODO: **BONUS** display subject names instead of subject_id on index.php and show.php
TODO: create a select option for subjects - use a while loop.


*/
