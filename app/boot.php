<?php
/**
 * launch script
 */
declare(strict_types = 1);


$number = [
    1234235345345345,
    3545435454354543,
    5674765786886788,
    0000000000000042,
    7896768545353535
];

$rand_keys = array_rand($number, 2);
$serial = $number[$rand_keys[0]];


$payload = [
    'status' => '42',
    'message' => 'hello world',
    'serial' => $serial,
    'pool' => $number
];

header('Content-Type: text/html; charset=utf-8');

$layout = include __DIR__ . '/template/layout.php';

exit;



/*
use Atlas\Pdo\Connection;

$connection = Connection::new(
    'pgsql:host=localhost;dbname=',
    '',
    ''
);

$stm  = 'SELECT * FROM project WHERE published = :published';
$bind = ['published' => 1];
$mth = $connection->prepare($stm);
$mth->execute($bind);
$result = $mth->fetchAll(PDO::FETCH_ASSOC);

print_r($result);

echo 'YIELDING';
echo '<hr>';
foreach ($connection->yieldAll($stm, $bind) as $row) {
    print_r($row);
}
echo '<hr>';
*/