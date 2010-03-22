<?php
// $Id: privatemsg-recipients.tpl.php,v 1.5 2010-03-22 07:26:40 berdir Exp $
// Each file loads it's own styles because we cant predict which file will be
// loaded.
drupal_add_css(drupal_get_path('module', 'privatemsg') . '/styles/privatemsg-recipients.css');
?>
<div class="privatemsg-message-participants">
  <?php print $participants; ?>
</div>