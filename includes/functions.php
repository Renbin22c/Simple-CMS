<?php

function connectToDB(){
    return new PDO(
        'mysql:host=devkinsta_db;dbname=Simple_CMS',
        'root',
        '0sFa6YuOGxSVbOQa'
    );
}