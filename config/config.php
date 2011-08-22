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
 * add to Content Elements
 */

array_insert($GLOBALS['TL_CTE']['includes'], 0, array('iframe' => 'ContentArtIframe'));

?>