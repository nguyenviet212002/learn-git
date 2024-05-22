<?php
class HomeModel extends Database
{

    const TABLE = 'sanpham';
    public function getAll(){
        // var_dump($this->select('sanpham'));
        return $this->select(self::TABLE);
    }

}