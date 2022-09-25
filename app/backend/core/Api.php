<?php
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Api
{
    private static $_instance = null;
    private $_results;

    public static function getInstance()
    {
        if (!isset(self::$_instance))
        {
            self::$_instance = new Api();
        }

        return self::$_instance;
    }

    public function get($number, $records)
    {

       
        $client = new Client([
            'base_uri' => 'https://api-krs.ms.gov.pl/api/krs/OdpisAktualny/',
        ]);

        try {
            $response = $client->request('GET', $number, [
                'query' => ['rejestr'=> $records]
            ]);
            if($response->getStatusCode() == '200'){
                $body = $response->getBody();
                return $this->_results = json_decode($body);
            }else{
                return false;
            }
        } catch (RequestException $e) {
            return false;
            
        }
          
    }


    public function results()
    {
        return $this->_results;
    }


    public function error()
    {
        return $this->_error;
    }


}