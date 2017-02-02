<?php

class ZwagermanIT_GridControle_Model_Observer

{
    public function orderGridFilterColumn(Varien_Event_Observer $observer)
    {
        $grid = $observer->getBlock();
 
        if ($grid instanceof Mage_Adminhtml_Block_Sales_Order_Grid) {
                    $grid->removeColumn('billing_name');
        }
		if ($grid instanceof Mage_Adminhtml_Block_Sales_Order_Grid) {
                    $grid->removeColumn('store_id');
        }
		if ($grid instanceof Mage_Adminhtml_Block_Sales_Order_Grid) {
                    $grid->removeColumn('base_grand_total');
        }
    }
}
