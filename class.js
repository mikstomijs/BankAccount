class BankAccount {
    #balance;
    constructor(owner, balance) {
        this.owner = owner;
        this.#balance = balance; 
    }

    deposit(amount) {
             if (amount > 0) {
                this.#balance +=     amount;
        }
        else {
            document.getElementById("demo").innerHTML = "Nevar pievienot negatīvu daudzumu";
        }
       
    }

    withdraw(amount) {
            if (parseInt(amount) > 0 && amount <= this.#balance) {  
            this.#balance -= amount;
        }
        else {
            document.getElementById("error").innerHTML = "Nevar izņemt negatīvu daudzumu vai izņemšanas daudzums nevar būt lielāks par bilanci!";
        }
    }



       printInfo() {
        document.getElementById("demo").innerHTML = this.owner + ", " + this.#balance;
       
    }
}


