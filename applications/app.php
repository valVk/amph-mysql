<?php
require_once './vendor/autoload.php';

use Amp\Mysql\ResultSet;

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$host = (!empty($_ENV['MYSQL_PORT'])) ? $_ENV['MYSQL_HOST'] . ':' . $_ENV['MYSQL_PORT'] : $_ENV['MYSQL_HOST'];

\Amp\Loop::run(function() {
    /** @var \Amp\Mysql\Connection $pool */
    $pool = yield \Amp\Mysql\connect('host=' . $_ENV['MYSQL_HOST']
      . '; user=' . $_ENV['MYSQL_USER']
      . '; password=' . $_ENV['MYSQL_PASS']
      . '; db=' . $_ENV['MYSQL_DB']);
    
    /** @var \Amp\Mysql\Statement $statement */
    $statement = yield $pool->prepare("SELECT * FROM core_resource_tests;");
    
    /** @var \Amp\Mysql\ResultSet $result */
    $result = yield $statement->execute();
    $i = 0;
    while (yield $result->advance(ResultSet::FETCH_ASSOC)) {
        $row = $result->getCurrent();
        var_dump($i++);
        var_dump($row);
        // $row is an associative array of column values. e.g.: $row['column_name']
    }
});