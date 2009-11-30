<?php
// $Id: privatemsg-recipients.tpl.php,v 1.4 2009-11-30 17:37:15 berdir Exp $
// Each file loads it's own styles because we cant predict which file will be
// loaded.
drupal_add_css(drupal_get_path('module', 'privatemsg') . '/styles/privatemsg-recipients.css');
?>
<div class="message-participants">
  <?php print $participants; ?>
</div>