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

$errors = array(
    array('code' => '10001', 'pagseguro_message' => "Email is required.", 'custom_message' => ''),
    array('code' => '10002', 'pagseguro_message' => "Token is required.", 'custom_message' => ''),
    array('code' => '10003', 'pagseguro_message' => "Email invalid value.", 'custom_message' => ''),
    array('code' => '11001', 'pagseguro_message' => "receiverEmail is required.", 'custom_message' => ''),
    array('code' => '11002', 'pagseguro_message' => "receiverEmail invalid length: {0}", 'custom_message' => ''),
    array('code' => '11003', 'pagseguro_message' => "receiverEmail invalid value.", 'custom_message' => ''),
    array('code' => '11004', 'pagseguro_message' => "Currency is required.", 'custom_message' => ''),
    array('code' => '11005', 'pagseguro_message' => "Currency invalid value: {0}", 'custom_message' => ''),
    array('code' => '11006', 'pagseguro_message' => "redirectURL invalid length: {0}", 'custom_message' => ''),
    array('code' => '11007', 'pagseguro_message' => "redirectURL invalid value: {0}", 'custom_message' => ''),
    array('code' => '11008', 'pagseguro_message' => "reference invalid length: {0}", 'custom_message' => ''),
    array('code' => '11009', 'pagseguro_message' => "senderEmail invalid length: {0}", 'custom_message' => ''),
    array('code' => '11010', 'pagseguro_message' => "senderEmail invalid value: {0}", 'custom_message' => ''),
    array('code' => '11011', 'pagseguro_message' => "senderName invalid length: {0}", 'custom_message' => ''),
    array('code' => '11012', 'pagseguro_message' => "senderName invalid value: {0}", 'custom_message' => ''),
    array('code' => '11013', 'pagseguro_message' => "senderAreaCode invalid value: {0}", 'custom_message' => ''),
    array('code' => '11014', 'pagseguro_message' => "senderPhone invalid value: {0}", 'custom_message' => ''),
    array('code' => '11015', 'pagseguro_message' => "ShippingType is required.", 'custom_message' => ''),
    array('code' => '11016', 'pagseguro_message' => "shippingType invalid type: {0}", 'custom_message' => ''),
    array('code' => '11017', 'pagseguro_message' => "shippingPostalCode invalid Value: {0}", 'custom_message' => ''),
    array('code' => '11018', 'pagseguro_message' => "shippingAddressStreet invalid length: {0}", 'custom_message' => ''),
    array('code' => '11019', 'pagseguro_message' => "shippingAddressNumber invalid length: {0}", 'custom_message' => ''),
    array('code' => '11020', 'pagseguro_message' => "shippingAddressComplement invalid length: {0}", 'custom_message' => ''),
    array('code' => '11021', 'pagseguro_message' => "shippingAddressDistrict invalid length: {0}", 'custom_message' => ''),
    array('code' => '11022', 'pagseguro_message' => "shippingAddressCity invalid length: {0}", 'custom_message' => ''),
    array('code' => '11023', 'pagseguro_message' => "shippingAddressState invalid value: {0}, must fit the pattern: \w\{2\} (e. g. \"SP\")", 'custom_message' => ''),
    array('code' => '11024', 'pagseguro_message' => "Itens invalid quantity.", 'custom_message' => ''),
    array('code' => '11025', 'pagseguro_message' => "Item Id is required.", 'custom_message' => ''),
    array('code' => '11026', 'pagseguro_message' => "Item quantity is required.", 'custom_message' => ''),
    array('code' => '11027', 'pagseguro_message' => "Item quantity out of range: {0}", 'custom_message' => ''),
    array('code' => '11028', 'pagseguro_message' => "Item amount is required. (e.g. \"12.00\")", 'custom_message' => ''),
    array('code' => '11029', 'pagseguro_message' => "Item amount invalid pattern: {0}. Must fit the patern: \d+.\d\{2\}", 'custom_message' => ''),
    array('code' => '11030', 'pagseguro_message' => "Item amount out of range: {0}", 'custom_message' => ''),
    array('code' => '11031', 'pagseguro_message' => "Item shippingCost invalid pattern: {0}. Must fit the patern: \d+.\d\{2\}", 'custom_message' => ''),
    array('code' => '11032', 'pagseguro_message' => "Item shippingCost out of range: {0}", 'custom_message' => ''),
    array('code' => '11033', 'pagseguro_message' => "Item description is required.", 'custom_message' => ''),
    array('code' => '11034', 'pagseguro_message' => "Item description invalid length: {0}", 'custom_message' => ''),
    array('code' => '11035', 'pagseguro_message' => "Item weight invalid Value: {0}", 'custom_message' => ''),
    array('code' => '11036', 'pagseguro_message' => "Extra amount invalid pattern: {0}. Must fit the patern: -?\d+.\d\{2\}", 'custom_message' => ''),
    array('code' => '11037', 'pagseguro_message' => "Extra amount out of range: {0}", 'custom_message' => ''),
    array('code' => '11038', 'pagseguro_message' => "Invalid receiver for checkout: {0}, verify receiver's account status.", 'custom_message' => ''),
    array('code' => '11039', 'pagseguro_message' => "Malformed request XML: {0}.", 'custom_message' => ''),
    array('code' => '11040', 'pagseguro_message' => "maxAge invalid pattern: {0}. Must fit the patern: \d+", 'custom_message' => ''),
    array('code' => '11041', 'pagseguro_message' => "maxAge out of range: {0}", 'custom_message' => ''),
    array('code' => '11042', 'pagseguro_message' => "maxUses invalid pattern: {0}. Must fit the patern: \d+", 'custom_message' => ''),
    array('code' => '11043', 'pagseguro_message' => "maxUses out of range.", 'custom_message' => ''),
    array('code' => '11044', 'pagseguro_message' => "initialDate is required.", 'custom_message' => ''),
    array('code' => '11045', 'pagseguro_message' => "initialDate must be lower than allowed limit.", 'custom_message' => ''),
    array('code' => '11046', 'pagseguro_message' => "initialDate must not be older than 6 months.", 'custom_message' => ''),
    array('code' => '11047', 'pagseguro_message' => "initialDate must be lower than or equal finalDate.", 'custom_message' => ''),
    array('code' => '11048', 'pagseguro_message' => "search interval must be lower than or equal 30 days.", 'custom_message' => ''),
    array('code' => '11049', 'pagseguro_message' => "finalDate must be lower than allowed limit.", 'custom_message' => ''),
    array('code' => '11050', 'pagseguro_message' => "initialDate invalid format, use 'yyyy-MM-ddTHH:mm' (eg. 2010-01-27T17:25).", 'custom_message' => ''),
    array('code' => '11051', 'pagseguro_message' => "finalDate invalid format, use 'yyyy-MM-ddTHH:mm' (eg. 2010-01-27T17:25).", 'custom_message' => ''),
    array('code' => '11052', 'pagseguro_message' => "page invalid value.", 'custom_message' => ''),
    array('code' => '11053', 'pagseguro_message' => "maxPageResults invalid value (must be between 1 and 1000).", 'custom_message' => ''),
    array('code' => '11054', 'pagseguro_message' => "abandonURL invalid length: {0}", 'custom_message' => ''),
    array('code' => '11055', 'pagseguro_message' => "abandonURL invalid value: {0}", 'custom_message' => ''),
    array('code' => '11056', 'pagseguro_message' => "sender address required invalid value: {0}", 'custom_message' => ''),
    array('code' => '11057', 'pagseguro_message' => "sender address not required with address data filled", 'custom_message' => ''),
    array('code' => '11157', 'pagseguro_message' => "senderCPF invalid value: {0}", 'custom_message' => ''),
);

foreach($errors as $error) {
    $code = $error['code'];
    $message = str_replace("'", "\'", $error['pagseguro_message']);

    $installer->run("INSERT IGNORE INTO `{$this->getTable('pagseguroapi/error_messages')}` VALUES ('".$code."', '".$message."', '', '".now()."', '')");

    //$object = Mage::getModel('pagseguroapi/payment_errors');
    //$object->setData($error)->save();
}

$installer->endSetup();