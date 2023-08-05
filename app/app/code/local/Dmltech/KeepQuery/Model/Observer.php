<?php

class Dmltech_KeepQuery_Model_Observer
{
    public function salvarQuerystring(Varien_Event_Observer $observer)
    {
        $controllerAction = $observer->getControllerAction();
        $request = $controllerAction->getRequest();

        $promo = $request->getParam('promo_code');

        if ($promo) {
            Mage::getSingleton('customer/session')->setData('promo_code', $promo);
        }

        // Recupera da sessao e salva um log
        $promo = Mage::getSingleton('customer/session')->getData('promo_code');
        Mage::log($promo, null, 'dmltech.log', true);
    }
}
