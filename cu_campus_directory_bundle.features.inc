<?php
/**
 * @file
 * cu_campus_directory_bundle.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function cu_campus_directory_bundle_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "field_group" && $api == "field_group") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function cu_campus_directory_bundle_node_info() {
  $items = array(
    'directory_listing' => array(
      'name' => t('Directory Listing'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
