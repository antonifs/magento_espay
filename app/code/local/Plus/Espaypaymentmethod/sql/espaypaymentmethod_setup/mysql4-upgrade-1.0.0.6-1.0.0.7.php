<?php

$installer = $this;
$statusTable = $installer->getTable('sales/order_status');
$statusStateTable = $installer->getTable('sales/order_status_state');

$installer->startSetup();

// Insert statuses
$installer->getConnection()->insertArray(
        $statusTable, array(
    'status',
    'label'
        ), array(
    array('status' => 'accpt_espay_bcaatm', 'label' => 'ESPay BCA VA Online'),
    array('status' => 'accpt_espay_bcaklikpay', 'label' => 'ESPay BCA KlikPay'),
    array('status' => 'accpt_espay_xltunai', 'label' => 'ESPay XL TUNAI'),
    array('status' => 'accpt_espay_biiatm', 'label' => 'ESPay ATM MULTIBANK'),
    array('status' => 'accpt_espay_bnidbo', 'label' => 'ESPay BNI Debit Online'),
    array('status' => 'accpt_espay_epaybri', 'label' => 'ESPay e-Pay BRI'),
    array('status' => 'accpt_espay_briatm', 'label' => 'ESPay BRI ATM'),
    array('status' => 'accpt_espay_danamonob', 'label' => 'ESPay Danamon Online Banking'),
    array('status' => 'accpt_espay_danamonatm', 'label' => 'ESPay ATM Danamon'),
    array('status' => 'accpt_espay_dkiib', 'label' => 'ESPay DKI IB'),
    array('status' => 'accpt_espay_mandirisms', 'label' => 'ESPay MANDIRI SMS'),
    array('status' => 'accpt_espay_finpay195', 'label' => 'ESPay Modern Channel'),
    array('status' => 'accpt_espay_mandiriecash', 'label' => 'ESPay MANDIRI E-CASH'),
    array('status' => 'accpt_espay_creditcard', 'label' => 'ESPay Credit Card Visa / Master'),
    array('status' => 'accpt_espay_mandiriib', 'label' => 'ESPay MANDIRI IB'),
    array('status' => 'accpt_espay_maspionatm', 'label' => 'ESPay ATM MASPION'),
    array('status' => 'accpt_espay_mayapadaib', 'label' => 'ESPay Mayapada Internet Banking'),
    array('status' => 'accpt_espay_muamalatatm', 'label' => 'ESPay MUAMALAT ATM'),
    array('status' => 'accpt_espay_nobupay', 'label' => 'ESPay Nobu Pay'),
    array('status' => 'accpt_espay_permataatm', 'label' => 'ESPay PERMATA ATM'),
    array('status' => 'accpt_espay_permatapeb', 'label' => 'ESPay Permata ebusiness'),
    array('status' => 'accpt_espay_permatanetpay', 'label' => 'ESPay PermataNet'),
    array('status' => 'accpt_espay_emoedikk2', 'label' => 'ESPay EMOEDIKK2'),
    array('status' => 'accpt_espay_emoedikk', 'label' => 'ESPay EMOEDIKK'),
        )
);

$installer->getConnection()->insertArray(
        $statusStateTable, array(
    'status',
    'state',
    'is_default'
        ), array(
    array(
        'status' => 'accpt_espay_bcaatm',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_bcaklikpay',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_xltunai',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_biiatm',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_bnidbo',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_epaybri',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_briatm',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_danamonob',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_danamonatm',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_dkiib',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_mandirisms',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_finpay195',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_mandiriecash',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_creditcard',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_mandiriib',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_maspionatm',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_mayapadaib',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_muamalatatm',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_nobupay',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_permataatm',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_permatapeb',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_permatanetpay',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_emoedikk',
        'state' => 'processing',
        'is_default' => 0
    ),
    array(
        'status' => 'accpt_espay_emoedikk2',
        'state' => 'processing',
        'is_default' => 0
    ),
        )
);

/* Possible states: Mage_Sales_Model_Order::STATE_CANCELED Mage_Sales_Model_Order::STATE_CLOSED Mage_Sales_Model_Order::STATE_COMPLETE Mage_Sales_Model_Order::STATE_HOLDED Mage_Sales_Model_Order::STATE_NEW Mage_Sales_Model_Order::STATE_PAYMENT_REVIEW Mage_Sales_Model_Order::STATE_PENDING_PAYMENT Mage_Sales_Model_Order::STATE_PROCESSING */

$status = Mage::getModel('sales/order_status'); // Delete some statuses 
$status->setStatus('payment_accepted_espay_bcaatm')->delete();
$status->setStatus('payment_accepted_espay_bcaklikpa')->delete(); //Add a new status 
$status->setStatus('payment_accepted_espay_xltunai')->delete();
$status->setStatus('payment_accepted_espay_biiatm')->delete();
$status->setStatus('payment_accepted_espay_bnidbo')->delete();
$status->setStatus('payment_accepted_espay_epaybri')->delete();
$status->setStatus('payment_accepted_espay_briatm')->delete();
$status->setStatus('payment_accepted_espay_danamonob')->delete();
$status->setStatus('payment_accepted_espay_danamonat')->delete();
$status->setStatus('payment_accepted_espay_dkiib')->delete();
$status->setStatus('payment_accepted_espay_mandirism')->delete();
$status->setStatus('payment_accepted_espay_finpay195')->delete();
$status->setStatus('payment_accepted_espay_mandiriec')->delete();
$status->setStatus('payment_accepted_espay_creditcar')->delete();

$status->setStatus('payment_accepted_espay_mandiriib')->delete();
$status->setStatus('payment_accepted_espay_maspionat')->delete();
$status->setStatus('payment_accepted_espay_mayapadai')->delete();
$status->setStatus('payment_accepted_espay_muamalata')->delete();
$status->setStatus('payment_accepted_espay_nobupay')->delete();
$status->setStatus('payment_accepted_espay_permataat')->delete();
$status->setStatus('payment_accepted_espay_permatape')->delete();

$status->setStatus('payment_accepted_espay_permatane')->delete();
$status->setStatus('payment_accepted_espay_emoedikk2')->delete();

$status->setStatus('payment_accepted_espay_emoedikk')->delete();

$installer->endSetup();