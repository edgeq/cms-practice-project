<?php require_once('../../../private/initialize.php'); ?>

<?php //$id=$_GET['id'];
$id = isset($_GET['id']) ? $_GET['id'] : '1'; ?>

<div id="content">
<a href=" <?php echo url_for('/staff/subjects/index.php') ?>" class="back-link">&laquo; Back to Subjects</a>
<div id="encode examples">
  <ul>
    <a href="show.php?name=<?php echo u('John Doe');?>">Link</a><br />
    <a href="show.php?company=<?php echo u('Widgets&More');?>">Link</a><br />
    <a href="show.php?query=<?php echo u('!#*?');?>">Link</a><br />
  </ul>
</div>
</div>
