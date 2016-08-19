<?php
/**
 * Plugin Name: Wp Translator Helper
 * Description: An inline helper to keep translations more easy
 * Version: 0.1.1
 * Author: Joao Neto <eu@joaoneto.blog.br>
 */

function helper_filter( $translations, $text, $domain ) {
  if( $domain == 'nggallery' ) {
    return '<font style="border: 2px dotted yellow">' . $translations . '</font>';
  }

  return $translations;
}
 add_filter( 'gettext', 'helper_filter', 0, 3  );
