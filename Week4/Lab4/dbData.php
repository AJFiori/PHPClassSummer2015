<?php
function getAllTestData(){
    $db = dbconnect();
           
    $stmt = $db->prepare("SELECT * FROM corp");
    
    $results = array();
     if ($stmt->execute() && $stmt->rowCount() > 0) {
         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
     }
    return $results;
}

/*
 * $stmt = $db->prepare("SELECT * FROM test ORDER BY $column $order");
 */

function searchTest($column, $search){
    $db = dbconnect();
           
    $stmt = $db->prepare("SELECT * FROM corp WHERE $column LIKE :search");
    $search = '%'.$search.'%';
    $binds = array(
        ":search" => $search
    );
    $results = array();
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return $results;
}
