<?php require_once('../../../private/initialize.php');
// <br /><b>Notice</b>:  Undefined variable: page_name in <b>/Applications/MAMP/htdocs/cms-practice-project/public/staff/pages/new.php</b> on line <b>33</b><br />
if (is_post_request()) {

  // Handle form values sent by new.php
    $page = [];
    $page['page_name'] = $_POST['page_name'] ?? '';
    $page['subject_id'] = $_POST['subject_id'] ?? '';
    $page['published'] = $_POST['published'] ?? '';
    $page['page_content'] = $_POST['page_content'] ?? '';

    $result = insert_page($page);
    $new_id = mysqli_insert_id($db);
    redirect_to(url_for('/staff/pages/show.php?page_id=' . $new_id));
} else {
    // redirect_to(url_for('/staff/pages/new.php'));
}

?>

<?php $page_title = "Create Page"; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <a href=" <?php echo url_for('/staff/pages/index.php'); ?> " class="back-link">&laquo; Back to List</a>

  <div class="pages new">
    <h1>Create Page</h1>

    <form action="" method="post">
      <dl>
        <dt>Page Name</dt>
        <dd><input type="text" name="page_name" value="" /></dd>
      </dl>

      <dl>
        <dt>Subject</dt>
        <dd>
          <select name="subject_id" id="subject_id">
            <option value="">-choose a subject-</option>
            <option value="1">About CMS</option>
            <option value="2">Contact</option>
            <option value="3">Blogs</option>
            <option value="4">Portfolio</option>
            <option value="5">Content</option>

          </select>
        </dd>
      </dl>

      <dl>
        <dt>Content</dt>
          <dd>
            <textarea name="page_content" id="page_content" cols="30" rows="10" value=""> </textarea>
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
        <input type="submit" value="Create Page">
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
