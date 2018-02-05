<?php

class Card{
    
    protected $card_number;
    protected $valid = false;

    public function __construct($card_number)
    {
        $this->card_number = $card_number;
        $this->validate();
    }

    public function is_valid()
    {
        return $this->valid;
    }

    public function validate()
    {
        
        $number= preg_replace('/[^\d]/','', $this->card_number);
        $number_length= strlen($number);
        $sum = '';

        if($number === "" || $number_length < 16){
            return $this->valid = false;
        }
        
        

            for($i= $number_length - 1; $i>=0; --$i) 
            { 

                //double every second digit.
                $sum .= $i & 1 ? $number[$i] : $number[$i] * 2;
            }
            //Sum all the digits and calculate the remainder
            (array_sum(str_split($sum)) % 10 ===0)? $this->valid = true : $this->valid =false;
    }

}