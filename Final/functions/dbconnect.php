<?php
/**
 * Function to extablish a databse connection
 * 
 * @return PDO Object
 * 
 * 
 *      'DB_DNS' => 'mysql:host=mysql14.000webhost.com;port=3306;dbname=a6724009_php2015',
        'DB_USER' => 'a6724009_php2015',
        'DB_PASSWORD' => 'test123'
 * 
 * 
 */  
function dbconnect() {
    $config = array(
        'DB_DNS' => 'mysql:host=localhost;port=3306;dbname=phpclasssummer2015',
        'DB_USER' => 'PHP',
        'DB_PASSWORD' => 'summer15'
    );

    try {
        /* Create a Database connection and 
         * save it into the variable */
        $db = new PDO($config['DB_DNS'], $config['DB_USER'], $config['DB_PASSWORD']);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (Exception $ex) {
        /* If the connection fails we will close the 
         * connection by setting the variable to null */
        $db = null;
        $message = $ex->getMessage();
        include '../includes/error.php';
        
    }

    return $db;
}



