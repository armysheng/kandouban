<?php
namespace Service;

class CustMongoDB{
    protected $client = null;

    function __construct() {
        $this->client = new \MongoClient("mongodb://127.0.0.1:27017");
    }

    function douban() {
        return $this->client->douban;
    }
}