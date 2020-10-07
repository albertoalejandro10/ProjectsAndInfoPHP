<?php

// class User
// {
//     public $type;
// }

// class Admin
// {
//     public function greet()
//     {
//         return 'Hola Administrador';
//     }
// }

// $user = new User;
// $user->type = new Admin;
// echo $user->type->greet();

// require_once 'User.php';
// require_once 'Admin.php';

// $user = new User;
// $user->type = new Admin;
// echo $user->type->greet();

// echo $user->type->farewell();

require_once './abstract/Base.php';

$guest = new Guest();
echo $guest->login();

$user = new User('Betox');
echo $user->login();

$admin = new Admin('Ale');
echo $admin->login();
