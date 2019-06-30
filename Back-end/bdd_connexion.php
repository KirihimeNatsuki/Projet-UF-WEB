<?php
    $param = parse_ini_file('config.ini');
    $db = new pdo($param['url'], $param['user'], $param['pass']);
?>
