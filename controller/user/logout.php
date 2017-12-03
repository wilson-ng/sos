<?php

//logout.php

require_once __DIR__.'/../../config.php';

session_destroy();

header('Location: http://localhost.dev:8081/');
