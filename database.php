<?php
    $dsn = 'mysql:host=localhost;dbname=shopDB';
    $username = 'mgs_user';
    $password = 'pa55word';

    // Create connection
    $db = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
?>