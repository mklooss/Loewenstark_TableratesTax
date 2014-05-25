<?php

class Loewenstark_TableratesTax_Helper_Tax
extends Mage_Tax_Helper_Data
{
    const CONFIG_XML_PATH_PRICE_INCLUDES_TAX = 'tax/calculation/price_includes_tax';
    
    /**
     * priceIncludeTax get bool
     * 
     * @param int $store
     * @return bool
    **/
    public function priceIncludesTax($store=null)
    {
        if(method_exists(get_parent_class($this), "priceIncludesTax")) {
            return parent::priceIncludesTax($store);
        }
        return Mage::getStoreConfigFlag(self::CONFIG_XML_PATH_PRICE_INCLUDES_TAX, $store);
    }
}