<?php
class Hb_Hbslider_Block_Myblock 
extends Mage_Core_Block_Template
{
	public function helloBlock()
	{
		return '<br>Hello from block method';
	}

	public function methodblock()
     {
        //on initialize la variable
        $slider = '';
        $slider .= '<div id="banner-fade">';
        $slider .= '<ul class="bjqs">'; 

        /* we are doing the query to select all elements of the pfay_test table (thanks to our model test/test and we sort them by id_pfay_test */
     $collection = Mage::getModel('hbslider/hbslider')->getCollection()
                                 ->setOrder('id_hb_hbslider','asc');
         /* then, we check the result of the query and with the function getData() */
        foreach($collection as $data)
        {
             if($data->getData('status') == 'Enabled'){

             $slider .= '<li><a href="'.$data->getData('url').'"><img src="';
             $slider .= Mage::getBaseUrl('media') .$data->getData('imagename');
             $slider .= '" title="'.$data->getData('title').'" /></a></li>';

            }
         }

        $slider .= '</ul></div>'; 
         //i return a success message to the user thanks to the Session.
         Mage::getSingleton('adminhtml/session')->addSuccess('Cool !!');
         return $slider;
      }


}    