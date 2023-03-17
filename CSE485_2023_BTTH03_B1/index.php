<?php
require_once 'vendor/autoload.php';
require_once 'Util/MyEmailServer.php';
require_once 'Util/EmailSender.php';

$emailServer = new MyEmailServer();
$emailSender = new EmailSender($emailServer);
$emailSender->send("nguyenthithuyy2001@gmail.com", "Diem danh ne hihi", "nguyenthuy");
