<?php
    require_once('class/Database.php');

    class CategoryModel extends Database{
        function __construct(){
            $this->table_name = 'tbl_cata';
            parent::__construct();
        }

       
    }