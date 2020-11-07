<?php

    //connect dbconfig file and initialize db login credentials
    $ini = parse_ini_file(__DIR__ . './dbconfig.ini');

    //create database object
    $db = new PDO(
        "mysql:host=" . $ini['servername'] .
        ";port=" . $ini['port'] .
        ";dbname=" . $ini['dbname'],
        $ini['username'],
        $ini['password']);


    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    //TESTING
    //var_dump($db);