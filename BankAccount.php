<?php 
class BankAccount{
    public $owner;
    private $balance;

    public function __construct ($owner, $balance){
        $this->owner = $owner;
        $this->balance = $balance;
    }

    public function printInfo(){
        echo "<br>";
        echo $this -> owner;
        echo "<br>";
        echo $this -> balance;

    }

    public function deposit($amount){
        if($this->balance > $amount ){
            $this-> balance += $amount;
            return true;
        }
        return false;
    }


    public function withdraw($amount){
        if($this->balance > $amount){
            $this-> balance -= $amount;
            return true;
        }
        return false;
    }

    

    
};





?>