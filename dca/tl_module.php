<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 *
 * PHP version 5
 * @copyright  Patrick Landolt 2011
 * @author     Patrick Landolt <http://www.artack.ch>
 * @package    iFrame
 * @license    LGPL
 * @filesource
 */


/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['iframe']   = '{title_legend},name,headline,type;{config_legend},faq_categories;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';


/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['art_iframe_title'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['art_iframe_title'],
	'exclude'                 => true,
	'inputType'               => 'checkboxWizard',
	'foreignKey'              => 'tl_faq_category.title',
	'eval'                    => array('multiple'=>true, 'mandatory'=>true)
);


?>