<?php

/**
 * This demonstrates the deprecated static calls that might be called from procedural code like `.module` files.
 */

/**
 * A simple example.
 */
function simple_example() {
  $entity = new stdClass();
  $view = entity_view($entity, 'default');
}

/**
 * An example using all of the arguments.
 */
function lagncode_example() {
  $entity = new stdClass();
  $langcode = 'de';
  $view = entity_view($entity, 'default', $langcode);
}

function reset_cache_example() {
  // Not supported.
}

/**
 * An example using arguments as member values.
 */
function arguments_member_values() {
  $entity = new stdClass();
  $entity->field_view_mode = 'test';

  $view = entity_view($entity, $entity->field_view_mode);
}
