<?php

require_once 'User.php';
require_once 'Admin.php';
require_once 'Guest.php';

$user = new User('Betox');
echo $user->login();

$admin = new Admin('Alberto');
echo $admin->login();

$guest = new Guest();
echo $guest->login();
