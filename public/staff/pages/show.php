<?php require_once('../../../private/initialize.php');

?>

<?php
$id = isset($_GET['id']) ? $_GET['id'] : '1';
echo h($id);

 ?>
