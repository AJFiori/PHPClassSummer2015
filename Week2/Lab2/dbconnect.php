<?php
// Connects to the database  
function getDatabase() {
    $config = array(
        'DB_DNS' => 'mysql:host=localhost;port=3306;dbname=phpclasssummer2015',
        'DB_USER' => 'PHP',
        'DB_PASSWORD' => 'summer15'
    );
    try {
       
        $db = new PDO($config['DB_DNS'], $config['DB_USER'], $config['DB_PASSWORD']);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (Exception $ex) {
// by setting it to null it will close the connection 
        $db = null;
    }
    return $db;
}