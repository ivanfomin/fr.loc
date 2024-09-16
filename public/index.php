<?php

declare(strict_types=1);


$dbh = new PDO('pgsql:host=my_db;dbname=postgres', 'postgres', 'postgres');
var_dump($dbh);

$a = 25;
$b = 24;
while ($b < $a) {
    $b++;
}
print $b + $a;
