<?php

    //เข้ารหัส 
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods:GET, POST, OPTIONS PATXH, PUT, DETECT');
    header('Access-Control-Allow-Headers: token,Content-Type ');
    header('Access-control-Max-Age:1278000');
    header('Content-Length:0');
    header('Content-Type: text/plain');

    //ประกาศตัวแปร ในการเชื่อมต่อระบบฐานข้อมูล
    $hostAPI = "localhost";
    $userAPI = "root";
    $passAPI = "";
    $dbnameAPI = "sayada";

    //เชื่อมต่อฐานข้อมูล
    $conn = mysqli_connect($hostAPI, $userAPI, $passAPI, $dbnameAPI)
    or die("ไม่สามารถเชื่อต่อฐานข้อมูลได้");

    mysqli_set_charset($conn,"utf8");


?>