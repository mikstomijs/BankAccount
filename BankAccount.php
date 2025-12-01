<?php class BankAccount {
    

    public function __construct(public $owner, private $balance) 
{}

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
        else {
            echo "<p>Nevar pievienot negatīvu daudzumu!</p>";
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount < $this->balance) {
            $this->balance -= $amount;
        }
        else {
            echo "<p>Nevar pievienot negatīvu daudzumu vai izņemšanas daudzums nevar būt vairāk par bilansi!</p>";
        }
    }
    
    public function printInfo() {
        echo $this->owner;
        echo $this->balance;
    }
}