<?php

class Foggyline_HappyHour_Model_User extends Mage_Core_Model_Abstract
{
   protected $_eventPrefix      = 'foggyline_happyhour_user';
   protected $_eventObject      = 'user';
   
   protected function _construct()
   {
       $this->_init('foggyline_happyhour/user');
   }
}
