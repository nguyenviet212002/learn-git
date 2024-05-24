<?php
class HomeModel extends Database
{

    const TABLE = 'sanphams';
    public function getAll()
    {
        // var_dump($this->select('sanpham'));
        return $this->select(self::TABLE);
    }
}
// viet an lon
