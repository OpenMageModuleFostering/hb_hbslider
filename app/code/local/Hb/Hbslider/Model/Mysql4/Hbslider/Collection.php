<?php
class Hb_Hbslider_Model_Mysql4_Hbslider_Collection 
extends Mage_Core_Model_Mysql4_Collection_Abstract
 {
     public function _construct()
     {
         parent::_construct();
         $this->_init('hbslider/hbslider');
     }
}