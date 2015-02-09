<?php

    $settings = array(
        'template' => 'default'
    );
    
    /* Database connection settings */
    $connect['client'] 	= 'mysql';
    $connect['dbName'] 	= 'webshop';
    $connect['dbHost'] 	= 'localhost';
    $connect['dbUser'] 	= 'root';
    $connect['dbPass'] 	= '';
    $connect['ext']	= 'shop_';
    $connect['root']	= 'C:/Wamp2/www/webshop/';
    $connect['url']	= 'http://localhost/webshop/';

    /* Setup connection */
    try {
	$dbh = new PDO($connect['client'].':dbname='.$connect['dbName'].';host='.$connect['dbHost'], $connect['dbUser'], $connect['dbPass']);
    } catch (PDOException $e) {
	echo 'Whoops! No database! What now?'. $e;
        exit;
    }

?>