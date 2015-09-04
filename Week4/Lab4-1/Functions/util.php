<?php
/**
 * A method to check if a Post request has been made.
 *    
 * @return boolean
 */
function isPostRequest() {
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
}
/**
 * A method to check if a Get request has been made.
 *    
 * @return boolean
 */
function isGetRequest() {
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'GET' );
}

function ColumnArray() {
    $columnArray = array();
    $columnArray[0][0] = "id";
    $columnArray[1][0] = "ID";
    $columnArray[0][1] = "corp";
    $columnArray[1][1] = "Atlas Corporations";
    $columnArray[0][2] = "incorp_dt";
    $columnArray[1][2] = "Date";
    $columnArray[0][3] = "email";
    $columnArray[1][3] = "E-mail";
    $columnArray[0][4] = "zipcode";
    $columnArray[1][4] = "Zip Code";
    $columnArray[0][5] = "owner";
    $columnArray[1][5] = "Owner";
    $columnArray[0][6] = "phone";
    $columnArray[1][6] = "Phone";
    return $columnArray;
}