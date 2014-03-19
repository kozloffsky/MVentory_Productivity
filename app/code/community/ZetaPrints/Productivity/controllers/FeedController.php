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
 * Feed controller
 *
 * @category ZetaPrints
 * @package  ZetaPrints_Productivity
 * @author   Anatoly A. Kazantsev <anatoly@zetaprints.com>
 */

class ZetaPrints_Productivity_FeedController
  extends Mage_Core_Controller_Front_Action {

  public function updateAction () {
    $request = $this->getRequest();

    if (!$url = $request->getParam('url'))
      return;

    Mage::app()->cleanCache(md5($url));

    $subject = 'WP page was updated';
    $body = 'URL: ' . $url;

    Mage::helper('productivity')->sendEmail($subject, $body);
  }
}
