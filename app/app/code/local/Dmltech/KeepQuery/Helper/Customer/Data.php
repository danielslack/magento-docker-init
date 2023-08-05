<?php

class Dmltech_KeepQuery_Helper_Customer_Data extends Mage_Customer_Helper_Data
{
    public function getLoginUrl()
    {
        $url = parent::getLoginUrl();
        $promo = Mage::getSingleton('customer/session')->getData('promo_code');
        if ($promo) {
            $url .= '?promo=' . $promo;
        }
        Mage::log($url, null, 'dmltech.log', true);
        return $url;
    }
}
