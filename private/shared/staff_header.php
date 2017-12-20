<?php if (!isset($page_title)) {
    $page_title = 'Staff Area';
}; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>">
  <title>Staff - <?php echo h($page_title); ?></title>
</head>
<body>
  <header>
      <h1>Staff Area</h1>
  </header>

  <navigation>
    <ul>
      <li><a href="<?php echo url_for('/staff/index.php'); ?>">MENU</a></li>
    </ul>
  </navigation>
