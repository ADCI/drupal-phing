<?php

// Content of these tables will be ignored by Drush sql dump commands and
// only table structure will be saved to dump file.
$options['structure-tables']['common'] = array(
  // Cache tables for standard Drupal modules.
  'cache',
  'cache_block',
  'cache_bootstrap',
  'cache_field',
  'cache_filter',
  'cache_form',
  'cache_image',
  'cache_menu',
  'cache_page',
  'cache_path',
  'cache_update',

  // Cache tables for some frequently used contrib modules.
  'cache_admin_menu',
  'cache_location',
  'cache_libraries',
  'cache_rules',
  'cache_views',
  'cache_views_data',

  // Cache tables created by Entity Cache module.
  'cache_entity_comment',
  'cache_entity_file',
  'cache_entity_node',
  'cache_entity_taxonomy_term',
  'cache_entity_taxonomy_vocabulary',
  'cache_entity_user',
);
