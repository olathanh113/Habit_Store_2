<?php
//require file trong commons
require_once '/xampp/htdocs/HabitStore/commons/env.php';
require_once '/xampp/htdocs/HabitStore/commons/helper.php';
require_once '/xampp/htdocs/HabitStore/commons/connect-db.php';

//require file trong controllers
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

$act = $_GET['act'] ?? '/';

match ($act) {
    '/' => homeIndex(),
    'user-detail' => userDetail($_GET['id']),
};


require_once '/xampp/htdocs/HabitStore/commons/disconnect-db.php';