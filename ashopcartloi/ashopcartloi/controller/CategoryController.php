<?php
    require_once('class/Controller.php');
    require_once('model/CategoryModel.php');
    
class CategoryController extends Controller{

    public function index($id = 0){
        $sModel = new CategoryModel();
    $data['category'] =
     $sModel->getAll();
        $this->view('category_index', $data);
    }
    public function edit($id){
        $sModel = new CategoryModel();
        $data['category'] = $sModel->getById($id);
        $this->view('category_edit', $data);

    }
    public function new($id = 0){
        $sModel = new CategoryModel();
        $data['category']= $sModel ->getAll();

        $this->view('category_new', $data);
    }

    public function insert($id = 0){
            $fields[] = 'name';   
            $values[] = $_POST['name'];     
            $sModel = new CategoryModel();
            $sModel ->insert($fields, $values);
            $this->index();
        
    }

    public function update($id){
          
        $fields[] = 'name';   
        $values[] = $_POST['name'];     
            $sModel = new CategoryModel();
            $sModel ->update($fields, $values, $id);

            $this->index();
    }

    public function delete($id){
        $sModel = new CategoryModel();
        $sModel->delete($id);
            $this->index();


    }

}