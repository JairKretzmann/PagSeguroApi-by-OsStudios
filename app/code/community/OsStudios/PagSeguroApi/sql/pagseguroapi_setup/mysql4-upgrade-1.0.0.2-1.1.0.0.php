<?php
/**
 * Os Studios PagSeguro Api Payment Module
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   OsStudios
 * @package    OsStudios_PagSeguroApi
 * @copyright  Copyright (c) 2013 Os Studios (www.osstudios.com.br)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author     Tiago Sampaio <tiago.sampaio@osstudios.com.br>
 */

$installer = $this;

$installer->startSetup();

$installer->run("
	DROP TABLE IF EXISTS `{$this->getTable('pagseguroapi/error_messages')}`;
	CREATE TABLE `{$this->getTable('pagseguroapi/error_messages')}` (
		`code` int(10) UNSIGNED NOT NULL,
		`pagseguro_message` text,
		`custom_message` text,
		`created_at` datetime NOT NULL,
		`updated_at` datetime NOT NULL,
	PRIMARY KEY (`code`)
	);
");

$installer->endSetup();