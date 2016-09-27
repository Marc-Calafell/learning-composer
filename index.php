<?php

use HelloWorld\SayHello;
use Nosferatux\learning-composer;

require __DIR__ . "/vendor/autoload.php";
require "src/SayHello.php";


$sayhello= new \HelloWorld\SayHello();

echo $sayhello->world();


$sayhellw= new SayHello();

echo $sayhellw->world();
//echo $sayhello;