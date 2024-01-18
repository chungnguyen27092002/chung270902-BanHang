<?php
    require_once('class/Controller.php');
    require_once('model/CategoryModel.php');
    require_once('model/ProductModel.php');
    
class ProductController extends Controller{

    public function index($id = 0){
        $sModel = new ProductModel();
    $data['product'] = 
    $sModel->query('select  p.*, c.name as categories_name 
    from tbl_product p inner join tbl_cata c on p.idcata=c.id');
     $sModel->getAll();
        $this->view('product_index', $data);
    }

    public function new($id = 0){
        $cModel = new CategoryModel();
        $data['c_rows']= $cModel ->getAll();
        $this->view('product_new', $data);
    }

    public function edit($id){
        $sModel = new ProductModel();
        $cModel = new CategoryModel();
        $data['row'] = $sModel->getbyId($id);
        $data['c_rows'] = $cModel->getAll();
        $this->view('product_edit', $data);

    }
    public function insert($id = 0){     
            $fields[] = 'name';
            $fields[] = 'img';
            $fields[] = 'price';
            $fields[] = 'mota';
            $fields[] = 'idcata';
          
            
            $values[] = $_POST['name'];
            $values[] = $_POST['img'];
            $values[] = $_POST['price'];
            $values[] = $_POST['mota'];
            $values[] = $_POST['tbl_cata'];            
            
           

            $sModel = new ProductModel();
            $sModel ->insert($fields, $values);
            $this->index();
        
    }

    public function update($id){
        $fields[] = 'name';
            $fields[] = 'img';
            $fields[] = 'price';
            $fields[] = 'mota';
            $fields[] = 'idcata';
          
            
            $values[] = $_POST['name'];
            $values[] = $_POST['img'];
            $values[] = $_POST['price'];
            $values[] = $_POST['mota'];
            $values[] = $_POST['tbl_cata'];            
            

            $sModel = new ProductModel();
            $sModel ->update($fields, $values, $id);    
            $this->index();
    }

    public function delete($id){
        $sModel = new ProductModel();
        $sModel->delete($id);
            $this->index();


    }

}