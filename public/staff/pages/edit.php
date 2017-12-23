<?php

  require_once('../../../private/initialize.php');

if (!isset($_GET['page_id'])) {
    redirect_to(url_for('/staff/pages/index.php'));
}

$page_id = $_GET['page_id'];


if (is_post_request()) {

  // Handle form values sent by new.php
    $page = [];
    $page['page_id'] = $page_id;
    $page['page_name'] = $_POST['page_name'] ?? '';
    $page['page_content'] = $_POST['page_content'] ?? '';
    $page['published'] = $_POST['published'] ?? '';

    $result = update_page($page);
    redirect_to(url_for('/staff/pages/show.php?page_id=' . $page_id));
} else {
    $page = find_page_by_id($page_id);
}
?>
<?php $page_title = 'Edit Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <a href=" <?php echo url_for('/staff/pages/index.php'); ?> " class="back-link"> &laquo; Back to List</a>

  <div class="pages new">
    <h1>Edit Page</h1>

    <form action=" <?php echo url_for('/staff/pages/edit.php?page_id=' . h(u($page_id))); ?> " method="post">
      <dl>
        <dt>Page Name</dt>
        <dd><input type="text" name="page_name" value="" placeholder="<?php echo h($page['page_name']); ?>" /></dd>
      </dl>
      <dl>
        <dt>Content</dt>
        <dd>
          <textarea rows="24" cols="62" name="page_content" id="page_content">
              <?php echo h($page['page_content']); ?>
          </textarea>
        </dd>
      </dl>
      <dl>
        <dt>Published</dt>
        <dd>
          <input type="hidden" name="published" value="0" />
          <input type="checkbox" name="published" value="1<?php if ($subject['published'] == "1") {
    echo " checked";
} ?>" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Page">
      </div>
    </form>

  </div>

</div>
