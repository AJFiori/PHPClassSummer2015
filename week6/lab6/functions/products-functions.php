<?php
//products
//product_id
//category_id
//product
//price
//image



function createProduct($category_id, $product, $price, $image) {
    $db = getDatabase();
    $stmt = $db->prepare("INSERT INTO products SET category_id = :category_id, product = :product, price = :price, image = :image");
    $binds = array(
        ":category_id" => $category_id,
        ":product" => $product,
        ":price" => $price,
        ":image" => $image);
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        return true;
    }
}

function isValidProduct($value) {
    if (empty($value)) {
        return false;
    }
    return true;
}

function isValidPrice($value) {
    if (empty($value)) {
        return false;
    }
    return true;
}

function deleteProduct($value) {
    $db = getDatabase();
    $stmt = $db->prepare("DELETE FROM products WHERE product_id = :product_id");
    $binds = array(
                ":product_id" => $value);
    if ($stmt->execute($binds)) {
        return true;
    }
    else {
        return false;
    }
}

function getAllProducts() {
    $db = getDatabase();
    $stmt = $db->prepare("SELECT * FROM products");
    $results = array();
    if ($stmt->execute() && $stmt->rowCount() > 0) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    return $results;
}

function UpdateProduct($value, $value2, $value3, $value4) {
    $db = getDatabase();
    $stmt = $db->prepare("UPDATE products SET product = :product, price = :price, image = :image WHERE product_id = :product_id");
    $binds = array(
        ":product_id" => $value,
        ":product" => $value2,
        ":price" => $value3,
        ":image" => $value4);
    if ($stmt->execute($binds)) {
        return true;
    }
    else {
        return false;
    }
                   
}

function uploadProductImage() {
    
    $imageName = "";
    
    try {
        // Undefined | Multiple Files | $_FILES Corruption Attack
        // If this request falls under any of them, treat it invalid.
        if ( !isset($_FILES['upfile']['error']) || is_array($_FILES['upfile']['error']) ) {       
            throw new RuntimeException('Invalid parameters.');
        }
        // Check $_FILES['upfile']['error'] value.
        switch ($_FILES['upfile']['error']) {
            case UPLOAD_ERR_OK:
                break;
            case UPLOAD_ERR_NO_FILE:
                throw new RuntimeException('No file sent.');
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                throw new RuntimeException('Exceeded filesize limit.');
            default:
                throw new RuntimeException('Unknown errors.');
        }
        // You should also check filesize here. 
        if ($_FILES['upfile']['size'] > 1000000) {
            throw new RuntimeException('Exceeded filesize limit.');
        }
        // DO NOT TRUST $_FILES['upfile']['mime'] VALUE !!
        // Check MIME Type by yourself.
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $validExts = array(
                        'jpg' => 'image/jpg',
                        'jpeg' => 'image/jpeg',
                        'png' => 'image/png',
                        'gif' => 'image/gif',
                    );    
        $ext = array_search( $finfo->file($_FILES['upfile']['tmp_name']), $validExts, true );
        if ( false === $ext ) {
            throw new RuntimeException('Invalid file format.');
        }
        // You should name it uniquely.
        // DO NOT USE $_FILES['upfile']['name'] WITHOUT ANY VALIDATION !!
        // On this example, obtain safe unique name from its binary data.
        $fileName =  sha1_file($_FILES['upfile']['tmp_name']); 
        $location = sprintf('../../images/%s.%s', $fileName, $ext); 
        if ( !move_uploaded_file( $_FILES['upfile']['tmp_name'], $location) ) {
            throw new RuntimeException('Failed to move uploaded file.'); 
        }
        /* File is uploaded successfully. */
        $imageName = $fileName . '.' . $ext;
        
    } catch (RuntimeException $e) {
        /* There was an error */
        
    }
    
    return $imageName;    
    
}

function getProduct($id) {
    $db = getDatabase();
    $stmt = $db->prepare("SELECT * FROM products JOIN categories WHERE categories.category_id = products.category_id AND product_id = :product_id");
     $binds = array(
        ":product_id" => $id
    );
    
    $results = array();
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        
        
    return $results;
    }
}

function getProductByCategory($id) {
    $db = getDatabase();
    $stmt = $db->prepare("SELECT * FROM products JOIN categories ON categories.category_id = products.category_id WHERE products.category_id=:category_id");
     $binds = array(
        ":category_id" => $id
    );
    
    $results = array();
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
     
    return $results;
    
}
