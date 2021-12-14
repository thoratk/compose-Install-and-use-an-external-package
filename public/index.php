<?php
use CowSay\Sheep;
require __DIR__ . '/../vendor/autoload.php';

$hello=new Sheep("sheep");
echo $hello->say();
