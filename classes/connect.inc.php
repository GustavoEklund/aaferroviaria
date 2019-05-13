<?php
    try {
        $connect = new PDO('mysql:host=127.0.0.1:3306; dbname=aaferroviaria','root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $error) {
        echo 'ERROR: ' . $error -> getMessage();
    }