<?php 

class Home extends Controller {
   public $model;
   public $data;
   public function __construct() {
    $this->model = $this->model('HomeModel');
   }
   function Home()
   {
      $this->data['sanpham'] = $this->model->getAll();
      
      $view = $this->render('home/home', $this->data);
   }
  
}   