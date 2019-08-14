<?php
  class Hb_hbslider_Block_Adminhtml_hbslider_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
  {
     public function __construct()
     {
          parent::__construct();
          $this->setId('slider_tabs');
          $this->setDestElementId('edit_form');
          $this->setTitle('HB Slider : Edit');
      }
      protected function _beforeToHtml()
      {
          $this->addTab('form_section', array(
                   'label' => 'Edit Slide',
                   'title' => 'Edit Slide',
                   'content' => $this->getLayout()
     ->createBlock('hbslider/adminhtml_hbslider_edit_tab_form')
     ->toHtml()
         ));
         return parent::_beforeToHtml();
    }
}