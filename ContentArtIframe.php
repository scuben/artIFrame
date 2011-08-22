<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Class ContentText
 * Front end content element "iFrame".
 * 
 * PHP version 5
 * @copyright  ARTACK WebLab GmbH - 2011
 * @author     Gabriel Novotny <http://www.artack.ch>
 * @package    iFrame
 * @license    LGPL
 * @filesource
 */
class ContentArtIframe extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_iframe';
  

	/**
	 * Generate content element
	 */
	protected function compile()
	{
		$this->Template->title = $this->art_iframe_title;
    $this->Template->src = $this->art_iframe_src;
    $this->Template->width = unserialize($this->art_iframe_width);
    $this->Template->height = unserialize($this->art_iframe_height);
    $this->Template->longdesc = $this->art_iframe_longdesc;
    $this->Template->frameborder = $this->art_iframe_frameborder;
    $this->Template->scrolling = $this->art_iframe_scrolling;		
	}
}

?>