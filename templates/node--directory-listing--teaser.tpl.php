<div class="directory-listing-teaser">
  <h3 class="directory-title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>

  <?php if (!empty($content['field_directory_phone']) || !empty($content['field_directory_email']) || !empty($content['field_directory_website'])): ?>

  <div class="directory-contact-wrapper">
    <h4 class="element-invisible">Contact Information</h4>
    <ul class="directory-contact-list">


    <?php if (!empty($content['field_directory_phone'])): ?>
      <li class="directory-contact-item directory-contact-phone">
        <a href="tel:<?php print render($content['field_directory_phone']);?>"><span><i class="fa fa-phone"></i> <span class="element-invisible">Phone</span> <?php print render($content['field_directory_phone']);?></span></a>
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
</div>
