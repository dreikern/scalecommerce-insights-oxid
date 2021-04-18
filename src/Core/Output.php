<?php

namespace Dreikern\ScalecommerceInsights\Core;

use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Core\ShopVersion;
use OxidEsales\Facts\Facts;

class Output extends Output_parent
{
    public function sendHeaders()
    {
        $config = Registry::getConfig();

        if (($view = $config->getTopActiveView())) {
            Registry::getUtils()->setHeader("x-sc-controller: " . strtolower($view->getClassKey()));
        }

        try {
            $edition = (new Facts())->getEdition();
        } catch(\Exception $e) {
            $edition = 'unknown';
        }

        Registry::getUtils()->setHeader("x-sc-memory-peak-usage: " . memory_get_peak_usage(true));
        Registry::getUtils()->setHeader("x-sc-app-product: OXID eShop");
        Registry::getUtils()->setHeader("x-sc-app-edition: ". $edition);
        Registry::getUtils()->setHeader("x-sc-app-version: ". oxNew(ShopVersion::class)->getVersion());

        parent::sendHeaders();
    }
}
