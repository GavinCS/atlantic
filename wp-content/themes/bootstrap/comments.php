<?php
/*
The comments page for Bones
*/

// Do not delete these lines
 if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
  	<div class="alert alert-info"><?php _e("This post is password protected. Enter the password to view comments.","bonestheme"); ?></div>
  <?php
    return;
  }
?>