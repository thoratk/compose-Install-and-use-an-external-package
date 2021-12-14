<?php
use CowSay\Cow;
require __DIR__ . '/../vendor/autoload.php';

$cow=new Cow("COW");
echo $cow->say();
