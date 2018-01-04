

<?php if (!empty($content['parent'])): ?>
  <div class="directory-parent">
    <?php print render($content['parent']); ?>
  </div>
<?php endif; ?>

<?php print render($content['body']); ?>

<div class="directory-location">
  <?php if (!empty($content['field_directory_map_url'])): ?>
    <iframe class="directory-map" src="<?php print render($content['field_directory_map_url']); ?>" /></iframe>
  <?php endif; ?>

  <div class="directory-location-item"><?php print render($content['field_directory_building_name']); ?></div>
  <div class="directory-location-item"><?php print render($content['field_directory_address_2']); ?></div>
  <div class="directory-location-item"><?php print render($content['field_directory_address_3']); ?></div>
</div>

<h2>Contact Information</h2>
<div class="directory-contact-wrapper">
  <?php if (!empty($content['field_directory_phone'])): ?>
    <div class="directory-contact-item directory-contact-phone">
      <a href="tel:<?php print render($content['field_directory_phone']);?>"><span><small><i class="fa fa-phone"></i> Main Phone</small><br /><?php print render($content['field_directory_phone']);?></span></a>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['field_directory_email'])): ?>
    <div class="directory-contact-item directory-contact-email">
       <a href="mailto:<?php print render($content['field_directory_email']);?>"><span><i class="fa fa-envelope"></i> E-mail</span></a>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['field_directory_website'])): ?>
    <div class="directory-contact-item directory-contact-website">
       <a href="<?php print render($content['field_directory_website']);?>"><span><i class="fa fa-laptop"></i> Website</span></a>
    </div>
  <?php endif; ?>
</div>

<?php if (!empty($content['field_directory_contact'])): ?>
  <div class="directory-additional-contacts">
    <h3>Additional Contacts</h3>
    <ul class="directory-additional-contacts-list">
      <?php print render($content['field_directory_contact']); ?>
    </ul>
  </div>
<?php endif; ?>


<?php if (!empty($content['members'])): ?>
<div class="directory-members">
  <h2>Departments under <?php print render($title); ?></h2>
  <?php print render($content['members']); ?>
</div>
<?php endif; ?>
