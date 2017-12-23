<?php require_once('../../../private/initialize.php');?>
<!--
DONE: add form for /staff/pages/new.php
DONE: add form for /staff/pages/edit.php
DONE: add links to both pages
DONE: editing requires a page_id. pass one in!
DONE: add single-page form processing for both forms
      if form was submitted, display form parameters and form
DONE: display submitted menu_name on the forms
DONE: **BONUS** display submitted position and visibility on forms
 -->
<?php

$pages_set = find_all_pages();

 ?>

<?php $page_title = "Pages"; ?>
<?php include(SHARED_PATH . "/staff_header.php");  ?>

<div id="content">
  <div class="pages listing">
    <h1>Pages</h1>

    <div class="actions">
      <a href=" <?php echo url_for('/staff/pages/new.php'); ?> " class="action">Create New Page</a>
    </div>

    <table class="list">
      <tr>
        <th>Page ID</th>
        <th>Subject ID</th>
        <th>Position</th>
        <th>Page Name</th>
        <th>Published</th>
        <th>URL</th>
        <th>EDIT</th>
        <th>DELETE</th>
      </tr>
      <?php while ($page = mysqli_fetch_assoc($pages_set)) {
     ?>
      <tr>
        <td> <?php echo h($page['page_id']); ?> </td>
        <td> <?php echo h($page['subject_id']); ?> </td>
        <td> <?php echo h($page['position']); ?> </td>
        <td> <?php echo h($page['page_name']); ?> </td>
        <td> <?php echo $page['published'] == true ? 'published' : 'unpublished'; ?> </td>
        <td> <a href="<?php echo url_for('staff/pages/show.php?id=') . $page['page_id'] ?>">View</a> </td>
        <td><a class="action" href="<?php echo url_for('/staff/pages/edit.php?page_id=' . h(u($page['page_id']))); ?>">Edit</a></td>
        <td><a class="action" href="<?php echo url_for('/staff/pages/delete.php?page_id=' . h(u($page['page_id']))); ?>">Delete</a></td>
      </tr>
    <?php
 } ?>
    </table>

    <?php
      mysqli_free_result($pages_set);

     ?>
  </div>

</div>

<?php include(SHARED_PATH . "/staff_footer.php"); ?>

<!--
MySQL Challenge
DONE: Create a pages table in MySQL
DONE: use the cms_pracitce db
DONE: Pages
  id: primary key
  subject_id: integer
  menu_name:string
  position:integer
  visible: boolean
  content: text
DONE: add indexes on all foreign keys
DONE: add data for pages (source the .sql you end up writing or use SQLqworkbench )
DONE: try some CRUD commands

-->
