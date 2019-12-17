<?php 

class Min implements ValidationInterface {
    
    private $name;
    private $value;
    private $limit;

    public function __construct($name,$value,$limit){
        $this->name = ucfirst($name);
        $this->value = $value;
        $this->limit = $limit;
    }

    public function validate(){
        //Main Validation
        if(strlen($this->value) < $this->limit){
            return $this->name." size atleast ".$this->limit." characters.";
        }
        return '';
    }
}