<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php') ?>

  <div id="content">
    <div id="main-menu">
      <h2>Main Menu</h2>
      <ul>
        <li><a href="subjects/index.php">Subjects</a>
    </li>
      </ul>
    </div>
  </div>

<?php include(PRIVATE_PATH . '/shared/staff_footer.php') ?>

<!--TODO: Link from /staff/index.php -> /staff/pages/index
TODO: Add html and PHP for /staff/pages/index.php
TODO: make sure to use header and staff_footer
TODO: Use /staff/subjects as reference. NO copy/paste
TODO: Use a $pages array to hold a list of pages
TODO: Link each page to /staff/pages/show.php
TODO: Include the page ID as a URL para
TODO: Create /staff/pages/show.PHP
TODO: retrieve and display the page ID
TODO: Use file path techniques for including files (include, require_once, PATH_CONSTANTS)
TODO: encode dynamic data used for links and HTML
TODO USE URL techniques for creating links
TODO set $page_title for all pages


  -->
