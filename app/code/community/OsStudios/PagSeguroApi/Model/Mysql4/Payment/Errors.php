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

class OsStudios_PagSeguroApi_Model_Mysql4_Payment_Errors extends Mage_Core_Model_Mysql4_Abstract
{

    protected function _construct()
    {
        $this->_init('pagseguroapi/error_messages', 'code');
    }

    
    protected function _beforeSave(Mage_Core_Model_Abstract $object)
    {
    	$object->setUpdatedAt(now());
    	return parent::_beforeSave($object);
    }

}