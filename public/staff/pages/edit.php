<?php

  require_once('../../../private/initialize.php');

if (!isset($_GET['page_id'])) {
    redirect_to(url_for('/staff/pages/index.php'));
}

$page_id = $_GET['page_id'];
$page_name = '';
$page_author = '';
$published = '';

if (is_post_request()) {

  // Handle form values sent by new.php

    $page_name = $_POST['page_name'] ?? '';
    $page_author = $_POST['page_author'] ?? '';
    $published = $_POST['published'] ?? '';

    echo "Form parameters<br />";
    echo "Page name: " . $page_name . "<br />";
    echo "Author: " . $page_author . "<br />";
    echo "Published: " . $published . "<br />";
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
        <dd><input type="text" name="page_name" value="" /></dd>
      </dl>
      <dl>
        <dt>Author</dt>
        <dd>
          <select name="page_author" id="page_author">
            <option value="">-choose an author-</option>
            <option value="Pablo Escobar">Pablo Escobar</option>
            <option value="Che Guevara">Che Guevara</option>
            <option value="Omar Rodriguez">Omar Rodriguez</option>
            <option value="Julio Cortazar">Julio Cortazar</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Published</dt>
        <dd>
          <input type="hidden" name="published" value="0" />
          <input type="checkbox" name="published" value="1" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Page">
      </div>
    </form>

  </div>

</div>
