<?php

$this->startSetup();

$this->run("
CREATE TABLE {$this->getTable('espaypaymentmethod/sales/quote_payment')} (
	`quote_payment_id` INTEGER AUTO_INCREMENT PRIMARY KEY,
	`payment_id` INTEGER,
	`espay_payment_method` VARCHAR(255),
	`espay_payment_ref` VARCHAR(255),
	`created_at` DATETIME,
	`update_at` DATETIME
);

CREATE TABLE {$this->getTable('espaypaymentmethod/sales/order_payment')} (
	`order_payment_id` INTEGER AUTO_INCREMENT PRIMARY KEY,
	`payment_id` INTEGER,
	`espay_payment_method` VARCHAR(255),
	`espay_payment_ref` VARCHAR(255),
	`created_at` DATETIME,
	`update_at` DATETIME
);

");

$this->endSetup();