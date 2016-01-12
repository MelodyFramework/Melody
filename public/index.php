<?php
include(__DIR__.'/../vendor/autoload.php');

use Melody\Framework\Core;

Core::Init(__DIR__.'/..', true);
Core::Run($_GET['q']);