<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 *
 * PHP version 5
 * @copyright  ARTACK WebLab GmbH - 2011
 * @author     Patrick Landolt <http://www.artack.ch>
 * @package    iFrame
 * @license    LGPL
 * @filesource
 */


/**
 * Add palettes to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['iFrame'] = 'type,art_iframe_title,art_iframe_src,art_iframe_longdesc,art_iframe_width,art_iframe_height,art_iframe_align,art_iframe_frameborder,art_iframe_scrolling;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';


/**
 * Add fields to tl_content
 */
$fields = array
(
  'art_iframe_title'    =>  array
  (
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['art_iframe_title'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'long'),
  ),
  'art_iframe_src'      =>  array
  (
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['art_iframe_src'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50 wizard'),
    'wizard' => array
    (
      array('tl_content', 'pagePicker')
    )
  ),
  'art_iframe_longdesc' => array
  (
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['art_iframe_longdesc'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50 wizard'),
    'wizard' => array
    (
      array('tl_content', 'pagePicker')
    )
  ),
  'art_iframe_width' => array
  (
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['art_iframe_width'],
    'exclude'                 => true,
    'inputType'               => 'inputUnit',
    'options'                 => array('px', '%'),
    'eval'                    => array('mandatory'=>true,'rgxp'=>'alnum', 'tl_class'=>'w50')
  ),
  'art_iframe_height' => array
  (
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['art_iframe_height'],
    'exclude'                 => true,
    'inputType'               => 'inputUnit',
    'options'                 => array('px', '%'),
    'eval'                    => array('mandatory'=>true,'rgxp'=>'alnum', 'tl_class'=>'w50')
  ),
  'art_iframe_frameborder' => array
  (
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['art_iframe_frameborder'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('1' => 'Ja', '0' => 'Nein'),
    'eval'                    => array('tl_class'=>'w50')
  ),
  'art_iframe_scrolling' => array
  (
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['art_iframe_scrolling'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('auto' => 'Automatisch', 'yes' => 'Immer', 'no' => 'Nie' ),
    'eval'                    => array('tl_class'=>'w50')
  ),
);

$GLOBALS['TL_DCA']['tl_content']['fields'] = array_merge($GLOBALS['TL_DCA']['tl_content']['fields'], $fields);

?>