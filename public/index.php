<?php

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/function.php';

new \nearyou\App();

throw new Exception('Page not found', 404);
