<?php
    class Controller{
        public function index($id){

        }
        public function new($id){

        }
        public function insert($id){

        }
        public function edit($id){

        }

        public function update($id){

        }

        public function delete($id){

        }
        /*
            $view_name = 'student_index' => "view/student/index.php"
            $data = ['id'=> 10, 'fileds'=>[fullname, DOB, sex],'values'=>['ABC', '2000-02-03', true]]
        */
        function view($viewName, $data)
        {
            extract($data); //Tách mảng thành các biến
            $name = explode('_', $viewName);
            $name = implode('/', $name);
            $name = "view/$name.php";//Lấy file view tương ứng
            
           // require('view/headeradm.php');    
            require($name);
          //  require('view/footeradm.php');    
            
        }


        


    }
