<?php
/**
 * @file
 * Template for a panel layout without any wrapper.
 *
 * This template provides a very simple reset panel display layout, which has no
 * markup.
 *
 * Variables:
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   $content['middle']: The only panel in the layout.
 */
?>

  <div class="parallax__layer parallax__layer--base">
    <?php print $content['content']; ?>
  </div>
  <div class="parallax__layer parallax__layer--back">
  </div>
  