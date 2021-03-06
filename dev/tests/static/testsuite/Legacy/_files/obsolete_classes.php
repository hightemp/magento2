<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    tests
 * @package     static
 * @subpackage  Legacy
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
return array(
    'Mage_Admin_Model_Acl_Role',
    'Mage_Admin_Model_Resource_Acl_Role',
    'Mage_Admin_Model_Resource_Acl_Role_Collection',
    'Mage_Adminhtml_Block_Api_Edituser',
    'Mage_Adminhtml_Block_Api_Tab_Userroles',
    'Mage_Adminhtml_Block_Catalog',
    'Mage_Adminhtml_Block_Permissions_Edituser',
    'Mage_Adminhtml_Block_Permissions_Tab_Userroles',
    'Mage_Adminhtml_Block_Permissions_Usernroles',
    'Mage_Adminhtml_Block_Report_Product_Ordered',
    'Mage_Adminhtml_Block_Report_Product_Ordered_Grid',
    'Mage_Adminhtml_Block_Sales',
    'Mage_Adminhtml_Block_Sales_Order_Create_Search_Grid_Renderer_Giftmessage',
    'Mage_Adminhtml_Block_Tag_Tag_Edit',
    'Mage_Adminhtml_Block_Tag_Tag_Edit_Form',
    'Mage_Adminhtml_Block_Tree',
    'Mage_Adminhtml_Helper_Rss',
    'Mage_Adminhtml_Model_System_Config_Source_Shipping_Allowedmethods',
    'Mage_Adminhtml_Rss_CatalogController',
    'Mage_Adminhtml_Rss_OrderController',
    'Mage_Bundle_Product_EditController' => array('suggestion' => 'Mage_Bundle_Adminhtml_Bundle_SelectionController'),
    'Mage_Bundle_SelectionController' => array('suggestion' => 'Mage_Bundle_Adminhtml_Bundle_SelectionController'),
    'Mage_Catalog_Model_Entity_Product_Attribute_Frontend_Image',
    'Mage_Catalog_Model_Resource_Product_Attribute_Frontend_Image',
    'Mage_Catalog_Model_Resource_Product_Attribute_Frontend_Tierprice',
    'Mage_Core_Model_Design_Source_Apply',
    'Mage_Core_Model_Language',
    'Mage_Core_Model_Resource_Language',
    'Mage_Core_Model_Resource_Language_Collection',
    'Mage_Core_Model_Session_Abstract_Varien',
    'Mage_Core_Model_Session_Abstract_Zend',
    'Mage_Customer_Block_Account',
    'Mage_Directory_Model_Resource_Currency_Collection',
    'Mage_Downloadable_FileController' => array(
        'suggestion' => 'Mage_Downloadable_Adminhtml_Downloadable_FileController'
    ),
    'Mage_Downloadable_Product_EditController' => array('suggestion' => 'Mage_Adminhtml_Catalog_ProductController'),
    'Mage_GiftMessage_Block_Message_Form',
    'Mage_GiftMessage_Block_Message_Helper',
    'Mage_GiftMessage_IndexController',
    'Mage_GiftMessage_Model_Entity_Attribute_Backend_Boolean_Config',
    'Mage_GiftMessage_Model_Entity_Attribute_Source_Boolean_Config',
    'Mage_GoogleOptimizer_IndexController' => array(
        'suggestion' => 'Mage_GoogleOptimizer_Adminhtml_Googleoptimizer_IndexController'
    ),
    'Mage_Ogone_Model_Api_Debug',
    'Mage_Ogone_Model_Resource_Api_Debug',
    'Mage_Page_Block_Html_Toplinks',
    'Mage_Page_Block_Html_Wrapper',
    'Mage_Poll_Block_Poll',
    'Mage_ProductAlert_Block_Price',
    'Mage_ProductAlert_Block_Stock',
    'Mage_Reports_Model_Resource_Coupons_Collection',
    'Mage_Reports_Model_Resource_Invoiced_Collection',
    'Mage_Reports_Model_Resource_Refunded_Collection',
    'Mage_Reports_Model_Resource_Shipping_Collection',
    'Mage_Sales_Block_Order_Details',
    'Mage_Sales_Block_Order_Tax',
    'Mage_Sales_Model_Entity_Order',
    'Mage_Sales_Model_Entity_Order_Address',
    'Mage_Sales_Model_Entity_Order_Address_Collection',
    'Mage_Sales_Model_Entity_Order_Attribute_Backend_Billing',
    'Mage_Sales_Model_Entity_Order_Attribute_Backend_Child',
    'Mage_Sales_Model_Entity_Order_Attribute_Backend_Parent',
    'Mage_Sales_Model_Entity_Order_Attribute_Backend_Shipping',
    'Mage_Sales_Model_Entity_Order_Collection',
    'Mage_Sales_Model_Entity_Order_Creditmemo',
    'Mage_Sales_Model_Entity_Order_Creditmemo_Attribute_Backend_Child',
    'Mage_Sales_Model_Entity_Order_Creditmemo_Attribute_Backend_Parent',
    'Mage_Sales_Model_Entity_Order_Creditmemo_Collection',
    'Mage_Sales_Model_Entity_Order_Creditmemo_Comment',
    'Mage_Sales_Model_Entity_Order_Creditmemo_Comment_Collection',
    'Mage_Sales_Model_Entity_Order_Creditmemo_Item',
    'Mage_Sales_Model_Entity_Order_Creditmemo_Item_Collection',
    'Mage_Sales_Model_Entity_Order_Invoice',
    'Mage_Sales_Model_Entity_Order_Invoice_Attribute_Backend_Child',
    'Mage_Sales_Model_Entity_Order_Invoice_Attribute_Backend_Item',
    'Mage_Sales_Model_Entity_Order_Invoice_Attribute_Backend_Order',
    'Mage_Sales_Model_Entity_Order_Invoice_Attribute_Backend_Parent',
    'Mage_Sales_Model_Entity_Order_Invoice_Collection',
    'Mage_Sales_Model_Entity_Order_Invoice_Comment',
    'Mage_Sales_Model_Entity_Order_Invoice_Comment_Collection',
    'Mage_Sales_Model_Entity_Order_Invoice_Item',
    'Mage_Sales_Model_Entity_Order_Invoice_Item_Collection',
    'Mage_Sales_Model_Entity_Order_Item',
    'Mage_Sales_Model_Entity_Order_Item_Collection',
    'Mage_Sales_Model_Entity_Order_Payment',
    'Mage_Sales_Model_Entity_Order_Payment_Collection',
    'Mage_Sales_Model_Entity_Order_Shipment',
    'Mage_Sales_Model_Entity_Order_Shipment_Attribute_Backend_Child',
    'Mage_Sales_Model_Entity_Order_Shipment_Attribute_Backend_Parent',
    'Mage_Sales_Model_Entity_Order_Shipment_Collection',
    'Mage_Sales_Model_Entity_Order_Shipment_Comment',
    'Mage_Sales_Model_Entity_Order_Shipment_Comment_Collection',
    'Mage_Sales_Model_Entity_Order_Shipment_Item',
    'Mage_Sales_Model_Entity_Order_Shipment_Item_Collection',
    'Mage_Sales_Model_Entity_Order_Shipment_Track',
    'Mage_Sales_Model_Entity_Order_Shipment_Track_Collection',
    'Mage_Sales_Model_Entity_Order_Status_History',
    'Mage_Sales_Model_Entity_Order_Status_History_Collection',
    'Mage_Sales_Model_Entity_Quote',
    'Mage_Sales_Model_Entity_Quote_Address',
    'Mage_Sales_Model_Entity_Quote_Address_Attribute_Backend',
    'Mage_Sales_Model_Entity_Quote_Address_Attribute_Backend_Child',
    'Mage_Sales_Model_Entity_Quote_Address_Attribute_Backend_Parent',
    'Mage_Sales_Model_Entity_Quote_Address_Attribute_Backend_Region',
    'Mage_Sales_Model_Entity_Quote_Address_Attribute_Frontend',
    'Mage_Sales_Model_Entity_Quote_Address_Attribute_Frontend_Custbalance',
    'Mage_Sales_Model_Entity_Quote_Address_Attribute_Frontend_Discount',
    'Mage_Sales_Model_Entity_Quote_Address_Attribute_Frontend_Grand',
    'Mage_Sales_Model_Entity_Quote_Address_Attribute_Frontend_Shipping',
    'Mage_Sales_Model_Entity_Quote_Address_Attribute_Frontend_Subtotal',
    'Mage_Sales_Model_Entity_Quote_Address_Attribute_Frontend_Tax',
    'Mage_Sales_Model_Entity_Quote_Address_Collection',
    'Mage_Sales_Model_Entity_Quote_Address_Item',
    'Mage_Sales_Model_Entity_Quote_Address_Item_Collection',
    'Mage_Sales_Model_Entity_Quote_Address_Rate',
    'Mage_Sales_Model_Entity_Quote_Address_Rate_Collection',
    'Mage_Sales_Model_Entity_Quote_Collection',
    'Mage_Sales_Model_Entity_Quote_Item',
    'Mage_Sales_Model_Entity_Quote_Item_Collection',
    'Mage_Sales_Model_Entity_Quote_Payment',
    'Mage_Sales_Model_Entity_Quote_Payment_Collection',
    'Mage_Sales_Model_Entity_Sale_Collection',
    'Mage_Sales_Model_Entity_Setup',
    'Mage_Shipping_ShippingController',
    'Mage_Tag_Block_Customer_Edit',
    'Mage_Wishlist_Model_Resource_Product_Collection',
    'Mage_XmlConnect_Helper_Payment',
    'Varien_Convert_Action',
    'Varien_Convert_Action_Abstract',
    'Varien_Convert_Action_Interface',
    'Varien_Convert_Adapter_Abstract',
    'Varien_Convert_Adapter_Db_Table',
    'Varien_Convert_Adapter_Http',
    'Varien_Convert_Adapter_Http_Curl',
    'Varien_Convert_Adapter_Interface',
    'Varien_Convert_Adapter_Io',
    'Varien_Convert_Adapter_Soap',
    'Varien_Convert_Adapter_Std',
    'Varien_Convert_Adapter_Zend_Cache',
    'Varien_Convert_Adapter_Zend_Db',
    'Varien_Convert_Container_Collection',
    'Varien_Convert_Container_Generic',
    'Varien_Convert_Container_Interface',
    'Varien_Convert_Mapper_Abstract',
    'Varien_Convert_Parser_Abstract',
    'Varien_Convert_Parser_Csv',
    'Varien_Convert_Parser_Interface',
    'Varien_Convert_Parser_Serialize',
    'Varien_Convert_Parser_Xml_Excel',
    'Varien_Convert_Profile',
    'Varien_Convert_Profile_Abstract',
    'Varien_Convert_Profile_Collection',
    'Varien_Convert_Validator_Abstract',
    'Varien_Convert_Validator_Column',
    'Varien_Convert_Validator_Dryrun',
    'Varien_Convert_Validator_Interface',
    'Varien_File_Uploader_Image',
    'Varien_Profiler' => array('suggestion' => 'Magento_Profiler'),
);
