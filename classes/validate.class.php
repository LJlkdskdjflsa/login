<?php
class Validate{
    private $_passed = false,$_errors=array(),$_db=null;

    public function __construct(){
        $this->_db = DB::getInstance();
    }
    public function check($source,$items = array()){
        foreach($items as $item => $rules){
            foreach($rules as $rule => $ruleValue){
                //echo "{$item} {$rule} must be {$ruleValue}<br>";
                $value = trim($source[$item]);
                //$item = escape($item);
                //echo $value ;
                //echo $source[$item] . "  ";
                if($rule === 'required' && empty($value)){
                    $this->addError("{$item} is required");
                    $item = escape($item);
                }else if(!empty($value)){
                    switch($rule){
                        case 'min' :
                            if (strlen($value)<$ruleValue){
                                $this -> addError("{$item} must be a minimum of {$ruleValue} character");
                            }
                        break;
                        case 'max' :
                            if (strlen($value)>$ruleValue){
                                $this -> addError("{$item} must be a maxium of {$ruleValue} character");
                            }
                            
                        break;
                        case 'maches' :
                            if ($value != $source[$ruleValue]){
                                $this -> addError("{$item} must match {$ruleValue} character");
                            }
                        break;
                        case 'unique' :
                            $check = $this->_db->get($ruleValue, array($item , "=" , $value));
                            if($check->count()){
                                $this->addError("{$item} already exists ");
                            }
                        break;
                    }
                }
            }
        }
        if(empty($this->_errors)){
            $this->_passed = true ;
        }
        return $this ;
    }

    private function addError($error){
        $this ->_errors[] = $error ;
    }

    public function errors(){
        return $this->_errors ;
    }

    public function passed(){
        return $this->_passed;
    }
}