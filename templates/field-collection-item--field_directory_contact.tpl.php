<li>
  <div class="directory-additional-contact-item">
    <?php if ($content['field_dir_contact_type'][0]['#markup'] == 'phone'): ?>
      <?php print render($content['field_dir_contact_label']); ?>
      <i class="fa fa-phone"></i> <?php print render($content['field_dir_contact_phone']); ?>
    <?php elseif ($content['field_dir_contact_type'][0]['#markup'] == 'email'): ?>
      <?php print render($content['field_dir_contact_label']); ?>
      <i class="fa fa-envelope"></i> <a href="mailto:<?php print render($content['field_dir_contact_email']); ?>">E-mail</a>
    <?php elseif ($content['field_dir_contact_type'][0]['#markup'] == 'email'): ?>
      <?php print render($content['field_dir_contact_label']); ?>
      <i class="fa fa-link"></i> <a href="<?php print render($content['field_dir_contact_website']); ?>">Website</a>
    <?php endif; ?>
  </div>

</li>
