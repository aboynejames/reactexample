<?php

// script to test for mem leaks
// You can test it using:
// siege localhost:8080

require __DIR__.'/../../vendor/autoload.php';
require 'phpwebpagerouter.php';
require 'phpwebpagehandler.php';
require 'phpwebpagebuilder.php';

$loop = new React\EventLoop\StreamSelectLoop();
$socket = new React\Socket\Server($loop);
$http = new React\Http\Server($socket, $loop);

$i = 0;

$http->on('request', function ($request, $response) use (&$i) {
echo $i;
var_dump($request->getMethod());
var_dump($request->getPath());
var_dump($request->getQuery());
//print_r($response);
$inpath['method'] = $request->getMethod();
$inpath['path'] = $request->getPath();
$inpath['query'] = $request->getQuery();

$newRouter = new reactRouter($request, $response, $inpath);

    $i++;
 
});

/*
$loop->addPeriodicTimer(2, function () use (&$i) {
    $kmem = memory_get_usage(true) / 1024;
    echo "Request: $i\n";
    echo "Memory: $kmem KiB\n";
});
*/
$socket->listen(4001);
$loop->run();