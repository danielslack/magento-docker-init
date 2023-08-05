<?php

class Dmltech_KeepQuery_Helper_Customer_Data extends Mage_Customer_Helper_Data
{
    public function getLoginUrlParams()
    {
        $params = parent::getLoginUrlParams();

        $promo_code = Mage::app()->getRequest()->getQuery('promo_code');

        if (!$promo_code) {
            $promo_code = Mage::getSingleton('customer/session')->getData('promo_code');
        } else {
            Mage::getSingleton('customer/session')->setData('promo_code', $promo_code);
        }


        $params['_query'] = array(
            'promo_code' => $promo_code
        );

        Mage::log($params, null, 'dmltech.log', true);

        return $params;
    }
}
