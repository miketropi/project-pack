<?php 
/**
 * Helpers 
 * 
 * @version 1.0.0
 * @since 1.0.0
 */

function pp_load_template($name, $require_once = false) {
  load_template( PP_DIR . '/templates/' . $name . '.php', $require_once );
}