<?php

// import data/person.php
require "data/person.php";
// buat object baru dari kelas person
$person1 = new Person("Thesa Febrian","Bengkulu");
// panggil function
$person1->sayHello("Thesa Febriani");
// panggil self keyword
$person1->info() . PHP_EOL;
