<?php
/**
  * The main index archive template file
  */
  defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

  get_header();

  echo $zmtheme[ 'center__sections' ]->getModule();

  get_footer();
