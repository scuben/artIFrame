-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************


-- --------------------------------------------------------

-- 
-- Table `tl_module`
-- 

CREATE TABLE `tl_module` (
  `art_iframe_title` varchar(255) NOT NULL default '',
  `art_iframe_src` varchar(255) NOT NULL default '',
  `art_iframe_width` varchar(255) NOT NULL default '',
  `art_iframe_height` varchar(255) NOT NULL default '',
  `art_iframe_align` varchar(255) NOT NULL default '',
  `art_iframe_frameborder` char(1) NOT NULL default '',
  `art_iframe_longdesc` varchar(255) NOT NULL default '',
  `art_iframe_name` varchar(255) NOT NULL default '',
  `art_iframe_scrolling` varchar(255) NOT NULL default '',
  `art_iframe_src` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;