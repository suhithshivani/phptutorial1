<?php

require '../vendor/autoload.php';
use Medoo\Medoo;
echo "Hello World";

$database = new Medoo([
'database_type' => 'sqlite',
'database_file' => '../storage/database.db'
]);