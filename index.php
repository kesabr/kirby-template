<?php

define('ROOT_DIR', __DIR__);

require 'kirby/bootstrap.php';

echo (new Kirby)->render();
