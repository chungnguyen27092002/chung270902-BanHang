<?php
    require_once('class/Controller.php');
    require_once('model/PhukienModel.php');
    
class PhukienController extends Controller{

    public function index($id = 0){
        $sModel = new PhukienModel();
    $data['phukien'] =
     $sModel->getAll();
        $this->view('phukien_index', $data);
    }
    public function edit($id){
        $sModel = new PhukienModel();
        $data['phukien'] = $sModel->getById($id);
        $this->view('phukien_edit', $data);

    }
    public function new($id = 0){
        $sModel = new PhukienModel();
        $data['phukien']= $sModel ->getAll();

        $this->view('phukien_new', $data);
    }

    public function insert($id = 0){
           
            $fields[] = 'name';
            $fields[] = 'img';
            $fields[] = 'price';
            $fields[] = 'mota';
            
          
            
            $values[] = $_POST['name'];
            $values[] = $_POST['img'];
            $values[] = $_POST['price'];
            $values[] = $_POST['mota'];       
            $sModel = new PhukienModel();
            $sModel ->insert($fields, $values);
            $this->index();
        
    }

    public function update($id){
          
        $fields[] = 'name';
        $fields[] = 'img';
        $fields[] = 'price';
        $fields[] = 'mota';
        
      
        
        $values[] = $_POST['name'];
        $values[] = $_POST['img'];
        $values[] = $_POST['price'];
        $values[] = $_POST['mota'];        
            $sModel = new PhukienModel();
            $sModel ->update($fields, $values, $id);

            $this->index();
    }

    public function delete($id){
        $sModel = new PhukienModel();
        $sModel->delete($id);
            $this->index();


    }

}