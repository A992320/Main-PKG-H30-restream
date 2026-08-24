<?php
session_start();
$_SESSION['admin_username'] = 'admin';
$_SESSION['admin_id'] = 1;
$_SESSION['csrf_token'] = 'test';
require 'admin.php';
