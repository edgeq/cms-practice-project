<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php') ?>

  <div id="content">
    <div id="main-menu">
      <h1>Main Menu</h1>
      <ul>
        <li><a href="<?php echo url_for('/staff/subjects/index.php');?>" >Subjects</a>
        <li><a href="<?php echo url_for('/staff/pages/index.php');?>">Pages</a>
    </li>
      </ul>
    </div>
  </div>

<?php include(PRIVATE_PATH . '/shared/staff_footer.php') ?>

<!--
DONE: Link from /staff/index.php -> /staff/pages/index
DONE: Add html and PHP for /staff/pages/index.php
DONE: make sure to use header and staff_footer
DONE: Use /staff/subjects as reference. NO copy/paste
DONE: Use a $pages array to hold a list of pages
DONE: Link each page to /staff/pages/show.php
DONE: Include the page ID as a URL para
DONE: Create /staff/pages/show.PHP
DONE: retrieve and display the page ID
DONE: Use file path techniques for including files (include, require_once, PATH_CONSTANTS)
DONE: encode dynamic data used for links and HTML
DONE USE URL techniques for creating links
DONE set $page_title for all pages


  -->
