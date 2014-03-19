<?php

/**
 * Productivity
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE-OSL.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category  ZetaPrints
 * @package   ZetaPrints_Productivity
 * @copyright Copyright (c) 2014 ZetaPrints Ltd. (http://www.zetaprints.com)
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

/**
 * Block for category Frontshop Preview button
 *
 * @category ZetaPrints
 * @package  ZetaPrints_Productivity
 * @author   anemets1@gmail.com
 */

class ZetaPrints_Productivity_Block_Adminhtml_Catalog_Category_Edit_Button extends Mage_Core_Block_Template
{
  /**
   * Get Category Id => Category Frontend Url jsoned array
   */
  public function getJson()
  {
    $categories_urls = array();
    $collection = Mage::getModel('catalog/category')->getCollection();
    foreach($collection as $category) {
      $categories_urls[$category->getId()] = $category->getUrl();
    }
    return Zend_Json::encode($categories_urls);
  }
}
