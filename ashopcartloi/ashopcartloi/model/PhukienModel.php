<?php
    require_once('class/Database.php');

    class PhukienModel extends Database{
        function __construct(){
            $this->table_name = 'tbl_phukien';
            parent::__construct();
        }

       
    }