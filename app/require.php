<?php

    // Require services from app\services folder
    require_once 'services/Core.php';

    require_once 'services/Controller.php';

    require_once 'services/Database.php';

    // Load config file
    require_once 'config/config.php';
    
    //Instantiate core class
    $init = new Core();
