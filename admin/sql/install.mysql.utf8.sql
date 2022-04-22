CREATE TABLE IF NOT EXISTS `#__payslip_payslips` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(200) NOT NULL,
	`prs_no` VARCHAR(20) NOT NULL,
	`values` MEDIUMTEXT NOT NULL,
	`alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
	`ordering` int(11) NOT NULL DEFAULT '0',
	`created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`created_by` int(11) unsigned NOT NULL DEFAULT '0',
	`modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`modified_by` int(11) unsigned NOT NULL DEFAULT '0',
	`publish_up` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`publish_down` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`version` int(11) unsigned NOT NULL DEFAULT '1',
	`hits` int(11) NOT NULL DEFAULT '0',
	`params` text NOT NULL,
	`metadata` text NOT NULL,
	`metakey` text NOT NULL,
	PRIMARY KEY (id)
)
CHARACTER SET utf8
COLLATE utf8_general_ci;
