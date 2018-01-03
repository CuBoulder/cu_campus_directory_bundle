<?php
/**
 * @file
 * cu_campus_directory_bundle.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function cu_campus_directory_bundle_taxonomy_default_vocabularies() {
  return array(
    'directory_type' => array(
      'name' => 'Directory Type',
      'machine_name' => 'directory_type',
      'description' => '',
      'hierarchy' => 0,
      'module' => 'taxonomy',
      'weight' => 0,
    ),
  );
}
