<?php
class Controller
{
    public function model($model)
    {
        if (file_exists(_DIR_ROOT_ . '/app/models/' . $model . '.php')) {
            require_once _DIR_ROOT_ . '/app/models/' . $model . '.php';
            if (class_exists($model)) {
                $model = new $model();
                return $model;
            }
        } else {
            echo '404: khong co file Model';
        }
    }
    public function render($view,$data=[])
    {    
        extract($data);
        if (file_exists(_DIR_ROOT_ . '/app/views/' . $view . '.php')) {
            require_once _DIR_ROOT_ . '/app/views/' . $view . '.php';
        } else {
            echo '404: khong co file view';
        }
    }
}
