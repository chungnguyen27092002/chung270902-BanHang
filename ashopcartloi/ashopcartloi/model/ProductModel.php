<?php
    require_once('class/Database.php');

    class ProductModel extends Database{
        function __construct(){
            $this->table_name = 'tbl_product';
            parent::__construct();
        }

       
    }