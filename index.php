<?php
define('ROOT_DIR', __DIR__);


use Kirby\Cms\App as Kirby;

require 'kirby/bootstrap.php';

echo (new Kirby)->render();
