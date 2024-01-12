<?php
session_start();
require_once __DIR__ . '/../app/constants/constants.php';
require_once __DIR__ . '/../app/functions/load.php';
$controller = require_once __DIR__ . '/../app/functions/controllers.php';
$controller();

require_once __DIR__ . '/../app/views/master.php';
