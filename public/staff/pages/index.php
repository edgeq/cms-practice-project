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
$pages = [
  ['page_id' => '1', 'page_name' => 'Page 01', 'published' => true, 'author' => 'Pablo Escobar'],
  ['page_id' => '2', 'page_name' => 'Page 02', 'published' => true, 'author' => 'Che Guevara'],
  ['page_id' => '3', 'page_name' => 'Page 03', 'published' => true, 'author' => 'Omar Rodriguez'],
  ['page_id' => '4', 'page_name' => 'Page 04', 'published' => false, 'author' => 'Julio Cortazar'],
];
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
        <th>Page Name</th>
        <th>Published</th>
        <th>URL</th>
        <th>Author</th>
        <th>EDIT</th>
      </tr>
      <?php foreach ($pages as $page) {
     ?>
      <tr>
        <td> <?php echo h($page['page_id']); ?> </td>
        <td> <?php echo h($page['page_name']); ?> </td>
        <td> <?php echo $page['published'] == true ? 'published' : 'unpublished'; ?> </td>
        <td> <a href="<?php echo url_for('staff/pages/show.php?id=') . $page['page_id'] ?>">LINK</a> </td>
        <td> <a href="<?php echo h('staff/pages/show.php?author=') . u($page['author']) ?>"> <?php echo $page['author'] ?> </a></td>
        <td><a class="action" href="<?php echo url_for('/staff/pages/edit.php?page_id=' . h(u($page['page_id']))); ?>">Edit</a></td>
      </tr>
    <?php
 } ?>
    </table>


  </div>

</div>

<?php include(SHARED_PATH . "/staff_footer.php"); ?>
