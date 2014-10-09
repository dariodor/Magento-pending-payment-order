<?php

// http://inchoo.net/magento/cancel-pending-orders/

class Evisole_PendingPaypal_Model_Observer
{
	public function cancelPendingOrders()  // pendingOrdersNotification
	{
            /*$orderCollection = Mage::getResourceModel('sales/order_collection');
 
            $orderCollection
                    ->addFieldToFilter('state', 'pending_payment')
                    ->addFieldToFilter('created_at', array('lt' =>  new Zend_Db_Expr("DATE_ADD('".now()."', INTERVAL -'90:00' HOUR_MINUTE)")))
                    ->getSelect()
                    ->order('e.entity_id')
                    ->limit(10)
            ;
 
 
           $orders ="";
            foreach($orderCollection->getItems() as $order)
            {
              $orderModel = Mage::getModel('sales/order');
              $orderModel->load($order['entity_id']);
 
 
              if(!$orderModel->canCancel())
                continue;*/
 
              /*$orderModel->cancel();
              $orderModel->setStatus('canceled_pendings');
              $orderModel->save();*/
              //Mage::log(var_dump($orderModel));
                Mage::log("cancelPendingOrders!");
            //}

	}
 
}

/*SEND EMAIL
http://www.atwix.com/magento/emails-for-custom-events/*/

/*class Namespace_Custmail_Model_Observer
{
    public function invoicedStatusChange($event)
    {
        $order = $event->getOrder();
        $orderStatus = $order->getStatus();
        if ($order->getState() == Mage_Sales_Model_Order::STATE_CANCELED)
            $this->_sendStatusMail($order);
    }
 
    private function _sendStatusMail($order)
    {
        $emailTemplate  = Mage::getModel('core/email_template');
 
        $emailTemplate->loadDefault('custom_order_tpl');
        $emailTemplate->setTemplateSubject('Your order was holded');
 
        // Get General email address (Admin->Configuration->General->Store Email Addresses)
        $salesData['email'] = Mage::getStoreConfig('trans_email/ident_general/email');
        $salesData['name'] = Mage::getStoreConfig('trans_email/ident_general/name');
 
        $emailTemplate->setSenderName($salesData['name']);
        $emailTemplate->setSenderEmail($salesData['email']);
 
        $emailTemplateVariables['username']  = $order->getCustomerFirstname() . ' ' . $order->getCustomerLastname();
        $emailTemplateVariables['order_id'] = $order->getIncrementId();
        $emailTemplateVariables['store_name'] = $order->getStoreName();
        $emailTemplateVariables['store_url'] = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_WEB);
        $emailTemplate->send($order->getCustomerEmail(), $order->getStoreName(), $emailTemplateVariables);
    }
}*/


?>