<?php
/**
 * @file
 * cu_campus_directory_bundle.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function cu_campus_directory_bundle_field_group_info() {
  $field_groups = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_dir_contact_additional|field_collection_item|field_directory_contact|form';
  $field_group->group_name = 'group_dir_contact_additional';
  $field_group->entity_type = 'field_collection_item';
  $field_group->bundle = 'field_directory_contact';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Additional Contact',
    'weight' => '0',
    'children' => array(
      0 => 'field_dir_contact_label',
      1 => 'field_dir_contact_type',
      2 => 'field_dir_contact_website',
      3 => 'field_dir_contact_email',
      4 => 'field_dir_contact_phone',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'label' => 'Additional Contact',
      'instance_settings' => array(
        'required_fields' => 1,
        'id' => '',
        'classes' => 'group-dir-contact-additional field-group-fieldset',
        'description' => '',
      ),
      'formatter' => 'collapsed',
    ),
  );
  $field_groups['group_dir_contact_additional|field_collection_item|field_directory_contact|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_directory_contact|node|directory_listing|form';
  $field_group->group_name = 'group_directory_contact';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'directory_listing';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_directory_content';
  $field_group->data = array(
    'label' => 'Contact',
    'weight' => '14',
    'children' => array(
      0 => 'field_directory_email',
      1 => 'field_directory_phone',
      2 => 'field_directory_website',
      3 => 'field_directory_contact',
    ),
    'format_type' => 'htab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-directory-contact field-group-htab',
        'required_fields' => 1,
      ),
    ),
  );
  $field_groups['group_directory_contact|node|directory_listing|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_directory_content|node|directory_listing|form';
  $field_group->group_name = 'group_directory_content';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'directory_listing';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Content',
    'weight' => '9',
    'children' => array(
      0 => 'group_directory_location',
      1 => 'group_directory_contact',
      2 => 'group_directory_summary',
      3 => 'group_directory_type',
    ),
    'format_type' => 'htabs',
    'format_settings' => array(
      'formatter' => '',
      'instance_settings' => array(
        'classes' => 'group-directory-content field-group-htabs',
        'id' => '',
      ),
    ),
  );
  $field_groups['group_directory_content|node|directory_listing|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_directory_location|node|directory_listing|form';
  $field_group->group_name = 'group_directory_location';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'directory_listing';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_directory_content';
  $field_group->data = array(
    'label' => 'Location',
    'weight' => '15',
    'children' => array(
      0 => 'field_directory_building_name',
      1 => 'field_directory_address_2',
      2 => 'field_directory_address_3',
    ),
    'format_type' => 'htab',
    'format_settings' => array(
      'label' => 'Location',
      'instance_settings' => array(
        'required_fields' => 1,
        'classes' => 'group-directory-location field-group-htab',
        'description' => '',
      ),
      'formatter' => 'closed',
    ),
  );
  $field_groups['group_directory_location|node|directory_listing|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_directory_summary|node|directory_listing|form';
  $field_group->group_name = 'group_directory_summary';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'directory_listing';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_directory_content';
  $field_group->data = array(
    'label' => 'Summary',
    'weight' => '13',
    'children' => array(
      0 => 'body',
      1 => 'field_directory_acronym',
    ),
    'format_type' => 'htab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-directory-summary field-group-htab',
        'required_fields' => 1,
      ),
    ),
  );
  $field_groups['group_directory_summary|node|directory_listing|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_directory_type|node|directory_listing|form';
  $field_group->group_name = 'group_directory_type';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'directory_listing';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_directory_content';
  $field_group->data = array(
    'label' => 'Type',
    'weight' => '12',
    'children' => array(
      0 => 'field_directory_type',
    ),
    'format_type' => 'htab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-directory-type field-group-htab',
        'required_fields' => 1,
      ),
    ),
  );
  $field_groups['group_directory_type|node|directory_listing|form'] = $field_group;

  // Translatables
  // Included for use with string extractors like potx.
  t('Additional Contact');
  t('Contact');
  t('Content');
  t('Location');
  t('Summary');
  t('Type');

  return $field_groups;
}
