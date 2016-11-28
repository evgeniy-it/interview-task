<?php

include_once "../app/bootstrap.php";

$terminator = new Controller\Terminator();

print_r($terminator->exec(0,[]));
