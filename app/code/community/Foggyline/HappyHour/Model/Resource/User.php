<?php

class Foggyline_HappyHour_Model_Resource_User extends Mage_Core_Model_Resource_Db_Abstract
{
   protected function _construct()
   {
       $this->_init('foggyline_happyhour/user', 'user_id');
   }
}
