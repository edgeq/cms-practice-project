<?php require_once('../../../private/initialize.php'); ?>
<?php
$id = isset($_GET['id']) ? $_GET['id'] : '1';

$page = find_page_by_id($id);
  ?>

<?php $page_title = "page " . $id ?>
<?php include(SHARED_PATH . "/staff_header.php"); ?>

<div id="content">
  <a href=" <?php echo url_for('/staff/pages/index.php') ?>" class="back-link">&laquo; Back to Pages</a>
  <div class="page attributes">
     <?php echo "<h2>This is page " . h($id) . "</h2>"; ?>

     <dl>
       <dt>Page Title</dt>
       <dd><?php echo h($page['page_name']); ?></dd>
     </dl>
     <dl>
       <dt>Position</dt>
       <dd><?php echo h($page['position']); ?></dd>
     </dl>
     <dl>
       <dt>Content</dt>
       <dd><?php echo $page['published'] == '1' ? 'published' : 'unpublished'; ?></dd>
     </dl>


       <h1>Content</h1>
       <blockquote><?php echo h($page['page_content']); ?></blockquote>


  </div>

</div>



<?php include(SHARED_PATH . "/staff_footer.php"); ?>
