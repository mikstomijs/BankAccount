<?php 
require_once 'BankAccount.php';
$janis = new BankAccount('janis', 1200);
$arturs = new BankAccount('arturs', 5000);  
$janis->deposit(2000);
$janis->withdraw(1200);
$janis->printInfo();
$arturs->deposit(2000);
$arturs->withdraw(1200);
$arturs->printInfo() . "\n";
?>