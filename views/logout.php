<?php
require_once '../classes/Session.php';
Session::start();
Session::logout();
header('Location: login.php');
exit;
