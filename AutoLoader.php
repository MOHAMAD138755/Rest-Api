<?php

//include "App/Request/Connection.php";
//include "App/Response/Response.php";

spl_autoload_register(function ($class) {
    include $class . ".php";
});
