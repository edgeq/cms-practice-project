<?php require_once('../../../private/initialize.php');
?>

<?php
$pages = [
  ['page_id' => '1', 'page_name' => 'Page 01', 'page_published' => true, 'author' => 'Pablo Escobar'],
  ['page_id' => '2', 'page_name' => 'Page 02', 'page_published' => true, 'author' => 'Che Guevara'],
  ['page_id' => '3', 'page_name' => 'Page 03', 'page_published' => true, 'author' => 'Omar Rodriguez'],
  ['page_id' => '4', 'page_name' => 'Page 04', 'page_published' => false, 'author' => 'Julio Cortazar'],
];
 ?>

<?php $page_title = "Pages"; ?>
<?php include(SHARED_PATH . "/staff_header.php");  ?>

<div id="content">
  <div class="pages listing">
    <h1>Pages</h1>

    <table class="list">
      <tr>
        <th>Page ID</th>
        <th>Page Name</th>
        <th>Published</th>
        <th>URL</th>
        <th>Author</th>
      </tr>
      <?php foreach ($pages as $page) {
     ?>
      <tr>
        <td> <?php echo h($page['page_id']); ?> </td>
        <td> <?php echo h($page['page_name']); ?> </td>
        <td> <?php echo $page['page_published'] == true ? 'published' : 'unpublished'; ?> </td>
        <td> <a href="<?php echo url_for('staff/pages/show.php?id=') . $page['page_id'] ?>">LINK</a> </td>
        <td> <a href="<?php echo h('staff/pages/show.php?author=') . u($page['author']) ?>"> <?php echo $page['author'] ?> </a></td>
      </tr>
    <?php
 } ?>
    </table>


  </div>

</div>

<?php include(SHARED_PATH . "/staff_footer.php"); ?>
