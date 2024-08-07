<?php

namespace ZMT\Theme\Config\Modules;

class configSectionNewHTML extends \ZMT\Theme\DefaultConfig\configSectionNewHTML {

  public $com_label;

  protected function sections_powered() {

    $this->com_label = __('Powered by', 'zmt-corporate');

    parent::sections();    

    $this->args['static_content'] = '[{"tag":"div","attributes":{"class":"uk-text-small uk-text-center"},"content":"© '.date('Y').' Corporate"},{"tag":"a","attributes":{"class":"uk-link-reset","href":"https://zuestmedia.com/themes/","target":"_blank","rel":"nofollow noopener noreferrer","uk-tooltip":"title:'.__('Opens in new tab','zmt-corporate').';pos: right"},"content":[{"tag":"span","attributes":{"class":""},"content":" | ZuestMedia WordPress Themes","close":true},{"tag":"i","attributes":{"class":"uk-margin-left-small","uk-icon":"link","aria-hidden":"true"},"close":true},{"tag":"span","attributes":{"class":"screen-reader-text"},"content":" ('.__('Opens in new tab','zmt-corporate').')","close":true}],"close":true}]';

    $this->args['section_class_section'] = 'uk-section uk-section-xsmall';

  }

}
