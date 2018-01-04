<div class="directory-listing-teaser">
  <h3 class="directory-title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>

  <div class="directory-contact-wrapper">
    <?php if (!empty($content['field_directory_phone'])): ?>
      <div class="directory-contact-item directory-contact-phone">
        <a href="tel:<?php print render($content['field_directory_phone']);?>"><span><i class="fa fa-phone"></i> <span class="element-invisible">Phone</span> <?php print render($content['field_directory_phone']);?></span></a>
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
</div>
