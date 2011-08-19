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
-- Table `tl_art_iframe`
-- 

CREATE TABLE `tl_art_iframe` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `title` varchar(255) NOT NULL default '',
  `headline` varchar(255) NOT NULL default '',
  `jumpTo` int(10) unsigned NOT NULL default '0',
  `allowComments` char(1) NOT NULL default '',
  `notify` varchar(32) NOT NULL default '',
  `sortOrder` varchar(32) NOT NULL default '',
  `perPage` smallint(5) unsigned NOT NULL default '0',
  `moderate` char(1) NOT NULL default '',
  `bbcode` char(1) NOT NULL default '',
  `requireLogin` char(1) NOT NULL default '',
  `disableCaptcha` char(1) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;