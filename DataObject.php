<?php 

class DataObject{
    
    public $data00 = '';
    public $data01 = '';
    public $data02 = '';
    
    function __construct($data00, $data01, $data02) {
        
        $this->data00 = $data00;
        $this->data01 = $data01;
        $this->data02 = $data02;
    }
}
?>