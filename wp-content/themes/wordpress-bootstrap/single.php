<?php
  $post = $wp_query->post;

  if (in_category('5')) {
      include(TEMPLATEPATH.'/singleProject.php');
  } else {
      include(TEMPLATEPATH.'/singleStandard.php');
  }
?>