<?php

class Sum {
    
    private $sum;
    private $bigSum;
    
    public function __construct() {
        
        $this->sum = 0;
        $this->bigSum = 0;
    }

    public function find($array) {
        
        $arraySize = count($array);
        for ($i = 0; $i < $arraySize; $i++){
            
            $this->sum += $array[$i];
            
            if ($this->sum > $this->bigSum) {
                $this->bigSum = $this->sum;
            }
            if ($this->sum < 0) {
                $this->sum = 0;
            }
        }
        return $this->bigSum;
    }
}