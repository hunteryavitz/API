<?php 

include_once('DataObject.php');

class ModelObject{
    
    public $idx;
    public $data_object;
    public $data_array;
    public $date;
    
    function __construct($idx, $data00, $data01, $data02, $data_alpha, $data_beta, $data_gamma, $date){
        
        $this->idx = $idx;
        $this->data_object = new DataObject($data00, $data01, $data02);
        $this->data_array = array("alpha" => $data_alpha, "beta" => $data_beta, "gamma" => $data_gamma);
        $this->date = $date;
    }
}
?>