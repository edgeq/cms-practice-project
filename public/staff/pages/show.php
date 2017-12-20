<?php require_once('../../../private/initialize.php'); ?>
<?php
$id = isset($_GET['id']) ? $_GET['id'] : '1';
  ?>

<?php $page_title = "page " . $id ?>
<?php include(SHARED_PATH . "/staff_header.php"); ?>

<div id="content">
  <a href=" <?php echo url_for('/staff/pages/index.php') ?>" class="back-link">&laquo; Back to Pages</a>
  <div class="page show">
     <?php echo "<h2>This is page " . h($id) . "</h2>"; ?>

  </div>

</div>



<?php include(SHARED_PATH . "/staff_footer.php"); ?>
