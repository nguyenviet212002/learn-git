<?php
class RegisterModel extends Database
{

    const TABLE = 'khachhangs';
    public function addTK($datas)
    {
        $alph = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $code = '';

        for ($i = 0; $i < 15; $i++) {
            $code .= $alph[rand(0, 35)];
        };
        $user = $datas['user'];
        $email = $datas['email'];
        $password = $datas['password'];
        return $this->create(
            self::TABLE,
            [
                'id_kh' => $code,
                'ten_kh' => $user,
                'email_kh' => $email,
                'mat_khau_kh' => md5($password),
                'ngay_tao_kh' => date('Y/m/d')
            ]
        );
    }
}
