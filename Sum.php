<?php

class Sum {
    
    private $sum;
    private $bigSum;
    
    public function __construct() {
        
        $this->sum = 0;
        $this->bigSum = 0;
    }

    public function find($array) {
        
        $lastId = count($array) - 1;

        foreach ($array as $id => $item){

            if($item > 0) {

                $this->sum += $item;
                $isFirstNegative = true;

                if (($id == $lastId)&&($this->bigSum < $this->sum)) {
                    $this->bigSum = $this->sum;
                }

            } elseif ($isFirstNegative ) {

                if ($this->bigSum < $this->sum) {
                    $this->bigSum = $this->sum;
                }

                $this->sum = 0;
                $isFirstNegative = false;
            }
        }
        return $this->bigSum;
    }
}