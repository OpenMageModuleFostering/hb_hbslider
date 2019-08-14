<?php
class Hb_Hbslider_Model_Mysql4_Hbslider 
extends Mage_Core_Model_Mysql4_Abstract
{
     public function _construct()
     {
         $this->_init('hbslider/hbslider', 'id_hb_hbslider');
     }
}