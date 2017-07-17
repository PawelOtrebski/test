<?php
try{    
    $dbh = new PDO('sqlite:test.db');
    

    $dbh = null;
    print_r($_SERVER);
}catch(PDOException $e){
    print $e->getMessage() . '<br>';
    die();
}
