<?php

    if(isset($_GET['module']))
        $module = $_GET['module'];

        else 
        $module = "phukien";

    if(isset($_GET['action']))
        $action = $_GET['action'];
    else 
        $action = "index";

    if(isset($_GET['id']))
        $id = $_GET['id'];
    else
        $id = 0;

   // index.php?module=student&action=edit&id=10
    
    $controllerName = ucfirst($module).'Controller';  
    require("controller/$controllerName.php");
    $controller = new $controllerName();
    $controller->$action($id);





