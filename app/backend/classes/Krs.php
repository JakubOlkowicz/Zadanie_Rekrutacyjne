<?php

class Krs
{
    private $_api,
            $_data;
    
    public function __construct()
    {

        $this->_api = Api::getInstance();

        $this->_actualLink = Config::get('link/actual');
        $this->_fullLink = Config::get('link/full');
        $this->_historyLink = Config::get('link/history');


    }        

    public function find($number, $records)
    {
        if ($number && $records)
        {

            $this->_data = $this->_api->get($number, $records);

            return $this->_data;
            
        }
    }



}