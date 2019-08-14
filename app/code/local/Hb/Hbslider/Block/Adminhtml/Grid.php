<?php
class Hb_Hbslider_Block_Adminhtml_Grid 
extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
     //where is the controller
     $this->_controller = 'adminhtml_hbslider';
     $this->_blockGroup = 'hbslider';
     //text in the admin header
     $this->_headerText = 'Slider management';
     //value of the add button
     $this->_addButtonLabel = 'Add Slide';
     parent::__construct();
     }
}