<?php

$installer = $this;
$installer->startSetup();
$installer->run("
DROP TABLE IF EXISTS `{$installer->getTable('hbslider/hbslider')}`;
CREATE TABLE `{$installer->getTable('hbslider/hbslider')}` (
`id_hb_hbslider` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `title` VARCHAR(500) NOT NULL ,
 `description` TEXT NOT NULL ,
 `imagename` VARCHAR(500) NOT NULL ,
 `url` VARCHAR(500) NOT NULL ,
 `status` VARCHAR(10) NOT NULL
 
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");
$installer->endSetup();