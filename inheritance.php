<?php

// import data/person.php
require "data/Manager.php";

// buat object new manager dan tambahakan value nama kemudian panggil function
$manager1 = new manager();
$manager1->nama = "Thesa";
$manager1->sayHello("Febriani");

// buat object new vicepresident dan tambahakan value nama kemudian panggil function
$vicePresident1= new vicePresident();
$vicePresident1->nama = "Selma";
$vicePresident1->alamat = "Bengkulu";
$vicePresident1->sayHello("Seleme");
