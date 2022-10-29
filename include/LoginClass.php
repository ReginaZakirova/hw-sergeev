<?php


class LoginClass
{
    public $login;
    private $password;
    public $error;

    public function __construct()
    {

    }
    public function registration($login, $password){
        $this->login = htmlspecialchars(trim($login));
        $this->password = base64_encode(htmlspecialchars(trim($password)));
        $error = array();
        $succes = array();
        //$row = array();
//        if(empty($login)){
//            $error['error'][]='Введите логин!';
//        }
//        if(empty($password)){
//            $error['error'][]='Введите пароль!';
//        }

        $this->validator($login,"Логин", 4,8);
        $this->validator($password,"Пароль", 4,10);
        $error['error'] = $this->error['error'];

        $password = $this->password;

        if(!empty($error['error'])){
            return $error;
        }else{
            $mysqli = new mysqli("127.0.0.1", "sergeev", "", 'segeev_DB');
            //$sql = "INSERT INTO Users (login,password) VALUES login = '".$login."','".$password."'";
            $sql = "SELECT * FROM Users WHERE login = '".$login."'";
            $result = $mysqli->query($sql);
            $row = mysqli_fetch_assoc($result);
            if(is_array($row)) {
                if (count($row) > 0) {
                    $error['error'][]='Пользователь с таким именем существует!';
                    return $error;
                }else{
                    $error['error'][]='пока не известно';
                    return $error;
                }
            }else{
                $sql = "INSERT INTO Users (login,password) VALUES ('".$login."','".$password."')";
                $result = $mysqli->query($sql);
                if($result){
                    $_SESSION['LOGIN'] = $login;
                    $succes['OK'] = 1;
                    $succes['MESSAGE'] = "Пользователь успешно добавлен";
                    $succes['LOGIN'] = $login;
                    return $succes;
                }else{
                    $error['error'][]='Что то сломалось...';
                }
            }
        }
        $mysqli->close();
    }

    public function validator($value, $name, $min_length, $max_lenght){
        //Валидация(минимальная длина, максимальная)
        if(strlen($value)<$min_length || strlen($value)>$max_lenght){
            $this->error['error'][] ='Длина поля "'.$name.'" не менее '.$min_length.' символов и не более '.$max_lenght.' символов!';
        }
    }

    public function authorization($login, $password){
        $this->login = htmlspecialchars(trim($login));
        $this->password = base64_encode(htmlspecialchars(trim($password)));
        $error = array();
        $succes = array();
        $row = array();
//        if(empty($login)){
//            $error['error'][]='Введите логин!';
//        }
//        if(empty($password)){
//            $error['error'][]='Введите пароль!';
//        }
        $this->validator($login,"Логин", 4,8);
        $this->validator($password,"Пароль", 4,10);
        $error['error'] = $this->error['error'];

        $password = $this->password;

        if(!empty($error['error'])){
            return $error;
        }else{
            $mysqli = new mysqli("127.0.0.1", "sergeev", "", 'segeev_db');
            $sql = "SELECT * FROM Users WHERE login = '".$login."'";
            $result = $mysqli->query($sql);
            $row = mysqli_fetch_assoc($result);
            if(is_array($row)) {
                if (!empty($row) > 0) {
                    if ($row['password'] == $password) {
                        $_SESSION['SID'] = $row['id'];
                        $_SESSION['LOGIN'] = $login;
                        $succes['OK'] = 1;
                        $succes['LOGIN'] = $login;
                        return $succes;
                    } else {
                        $error['error'][]='Не верный пароль';
                        return $error;
                    }
                }else{
                    $error['error'][]='Не верный логин или пароль';
                    return $error;
                }
            }else{
                $error['error'][]='Такого пользователя не существует!';
                return $error;
            }
        }
        $mysqli->close();
    }
}