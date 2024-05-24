<?php 

class Cart extends Controller {
//    public $model;
//    public $data;
//    public function __construct() {
//     $this->model = $this->model('HomeModel');
//    }
   function Cart()
   {
      $view = $this->render('clients/cart');
   }
   function Test()
   {
      $view = $this->render('Test');
   }
 
}   