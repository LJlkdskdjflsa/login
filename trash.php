//check execute success
            if($this->_query->execute()){
                //echo 'Success';
                
            } else{
                $this->_error = true ;
            }
        }    
    }
    public function error(){
        return $this->_error ;
    
    }