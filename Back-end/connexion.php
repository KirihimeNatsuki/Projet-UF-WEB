<?php
    $param = parse_ini_file('config.ini');
    $db = new pdo($param['url'], $param['user'], $param['pass']);
    //$db->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
