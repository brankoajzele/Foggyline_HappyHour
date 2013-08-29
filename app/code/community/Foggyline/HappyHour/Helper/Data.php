<?php

class Foggyline_HappyHour_Helper_Data extends Mage_Core_Helper_Abstract
{
   const XML_PATH_CUSTOM_MESSAGE = 'foggyline_happyhour/settings/custom_message';
   
   public function getCustomMessage($store = null)
   {
       return Mage::getStoreConfig(self::XML_PATH_CUSTOM_MESSAGE, $store);
   }
}
