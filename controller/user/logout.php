<?php

//logout.php

require_once __DIR__.'/../../config.php';

session_destroy();

header('Location: http://sos.localhost:8081/');
