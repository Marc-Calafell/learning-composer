<?php


require "vendor/autoload.php";
require "src/SayHello.php";


$sayhello= new \HelloWorld\SayHello();

echo $sayhello->world();


$sayhellw= new SayHello();

echo $sayhellw->world();
//echo $sayhello;