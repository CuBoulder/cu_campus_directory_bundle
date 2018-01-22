

<?php if (!empty($content['parent'])): ?>
  <div class="directory-parent">
    <?php print render($content['parent']); ?>
  </div>
<?php endif; ?>

<?php print render($content['body']); ?>


<?php if (!empty($content['field_directory_map_url']) || !empty($content['field_directory_building_name']) || !empty($content['field_directory_address_2']) || !empty($content['field_directory_address_3'])): ?>
<div class="directory-location">
  <?php if (!empty($content['field_directory_map_url'])): ?>
    <div class="directory-map-wrapper">
      <iframe class="directory-map" src="<?php print render($content['field_directory_map_url']); ?>" /></iframe>
    </div>
  <?php endif; ?>

  <div class="directory-location-item"><?php print render($content['field_directory_building_name']); ?></div>
  <div class="directory-location-item"><?php print render($content['field_directory_address_2']); ?></div>
  <div class="directory-location-item"><?php print render($content['field_directory_address_3']); ?></div>
</div>
<?php endif; ?>

<?php if (!empty($content['field_directory_phone']) || !empty($content['field_directory_email']) || !empty($content['field_directory_website'])): ?>
<h2 class="directory-header">Contact Information</h2>
<div class="directory-contact-wrapper">
  <ul class="directory-contact-list">
  <?php if (!empty($content['field_directory_phone'])): ?>
    <li class="directory-contact-item directory-contact-phone">
      <a href="tel:<?php print render($content['field_directory_phone']);?>"><span><i class="fa fa-phone"></i> <?php print render($content['field_directory_phone']);?></span></a>
    </li>
  <?php endif; ?>

  <?php if (!empty($content['field_directory_email'])): ?>
    <li class="directory-contact-item directory-contact-email">
       <a href="mailto:<?php print render($content['field_directory_email']);?>"><span><i class="fa fa-envelope"></i> E-mail</span></a>
    </li>
  <?php endif; ?>

  <?php if (!empty($content['field_directory_website'])): ?>
    <li class="directory-contact-item directory-contact-website">
       <a href="<?php print render($content['field_directory_website']);?>"><span><i class="fa fa-laptop"></i> Website</span></a>
    </li>
  <?php endif; ?>

  <?php if (!empty($content['field_directory_twitter']) || !empty($content['field_directory_facebook']) || !empty($content['field_directory_instagram'])): ?>
  <li class="directory-contact-item directory-contact-social">
    <span class="element-invisible">Social Media</span>
    <ul class="directory-social-links">
      <?php if (!empty($content['field_directory_twitter'])): ?>
        <li>
          <a href="<?php print render($content['field_directory_twitter']);?>"><i class="fa fa-twitter"></i> <span class="element-invisible">Twitter</span></a>
        </li>
      <?php endif; ?>
      <?php if (!empty($content['field_directory_facebook'])): ?>
        <li>
          <a href="<?php print render($content['field_directory_facebook']);?>"><i class="fa fa-facebook"></i> <span class="element-invisible">Facebook</span></a>
        </li>
      <?php endif; ?>
      <?php if (!empty($content['field_directory_instagram'])): ?>
        <li>
          <a href="<?php print render($content['field_directory_instagram']);?>"><i class="fa fa-instagram"></i> <span class="element-invisible">Instagram</span></a>
        </li>
      <?php endif; ?>
    </ul>
  </li>
  <?php endif; ?>
  </ul>
</div>
<?php endif; ?>

<?php if (!empty($content['field_directory_contact'])): ?>
  <div class="directory-additional-contacts">
    <h3 class="directory-header">Additional Contacts</h3>
    <ul class="directory-additional-contacts-list">
      <?php print render($content['field_directory_contact']); ?>
    </ul>
  </div>
<?php endif; ?>


<?php if (!empty($content['members'])): ?>
<div class="directory-members">
  <h2 class="directory-header">Departments under <?php print render($title); ?></h2>
  <?php print render($content['members']); ?>
</div>
<?php endif; ?>
