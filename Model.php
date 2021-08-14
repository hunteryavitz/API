<?php

class Model {
    
    public $idx;
    public $data00 = "";
    public $data01 = "";
    public $data02 = "";
    public $data_alpha;
    public $data_beta;
    public $data_gamma;
    public $date = "";
    
    function __construct($idx, $data00, $data01, $data02, $data_alpha, $data_beta, $data_gamma, $date) {
        
        $this->idx = $idx;
        $this->data00 = $data00;
        $this->data01 = $data01;
        $this->data02 = $data02;
        $this->data_alpha = $data_alpha;
        $this->data_beta = $data_beta;
        $this->data_gamma = $data_gamma;
        $this->date = $date;
    }
}
?>