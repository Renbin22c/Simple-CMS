<?php

class Authentication
{
    public $database;

    public function __construct()
    {
        // this function will trigger the class is called
        $this->database = connectToDB();
    }

}