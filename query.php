<?php

// feature prototype to define table and query to the DB in the one place

$table = "tablename";

$query = "
    CREATE TABLE $table (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(32) NOT NULL,
    surname VARCHAR(64) NOT NULL 
    )"
;


