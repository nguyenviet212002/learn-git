<?php

class Logup extends Controller
{
   public $model;
   public $data;
   public function __construct()
   {
      $this->model = $this->model('RegisterModel');
   }

   function Logup()
   {
      $view = $this->render('clients/logup');
   }
   function Register()
   {
      $user = $_REQUEST['user'];
      $email = $_REQUEST['email'];
      $password = $_REQUEST['password'];
      $datas = [
         'user' => $user,
         'email' => $email,
         'password' => $password
      ];
      $this->model->addTK($datas);
      $this->render('clients/login');
   }
}
