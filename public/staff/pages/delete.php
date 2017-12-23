<?php
require_once('../../../private/initialize.php');

if (!isset($_GET['page_id'])) {
    redirect_to(url_for('/staff/pages/index.php'));
}

$page_id = $_GET['page_id'];

if (is_post_request()) {
    $result = delete_page($page_id);
    redirect_to(url_for('/staff/pages/index.php'));
} else {
    $page = find_page_by_id($page_id);
}
 ?>

 <?php $page_title = 'Delete Page'; ?>
 <?php include(SHARED_PATH . '/staff_header.php'); ?>

 <div id="content">

   <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

   <div class="page delete">
     <h1>Delete Page</h1>
     <p>Are you sure you want to delete this page?</p>
     <p class="item"><?php echo h($page['page_name']); ?></p>

     <form action="<?php echo url_for('/staff/pages/delete.php?page_id=' . h(u($page['page_id']))); ?>" method="post">
       <div id="operations">
         <input type="submit" name="commit" value="Delete Page" />
       </div>
     </form>
   </div>

 </div>

 <?php include(SHARED_PATH . '/staff_footer.php'); ?>
