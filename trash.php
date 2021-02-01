//check execute success
            if($this->_query->execute()){
                //echo 'Success';
                $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
                $this->_count = $this->_query->rowCount();
            } else{
                $this->_error = true ;
            }
        }    
    }
    public function error(){
        return $this->_error ;
    
    }