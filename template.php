<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * parallax theme.
 */

// Add enquire.js
drupal_add_js('/js/enquire.js', array('type' => 'file', 'scope' => 'footer'));
drupal_add_js('js/imagesloaded.js', array('type' => 'file', 'scope' => 'footer'));
drupal_add_js('js/skrollr.js', array('type' => 'file', 'scope' => 'footer'));
drupal_add_js('js/_main.js', array('type' => 'file', 'scope' => 'footer'));
