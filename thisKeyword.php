<?php

// import data/person.php
require "data/person.php";

// buat object dari kelas person
$person1 = new person("Thesa Ferbriani", "Bengkulu");

// tambahkan value nama di object
$person1->nama = "Thesa Febriani";

// panggil function sayHelloNull dengan parameter
$person1->sayHelloNull("Selma Mulkya");

// buat object dari kelas person
$person2 = new person("Selma Mulkya", "Bengkulu");

// tambahkan value nama di object
$person2->nama = "Julia Dwi";

// panggil function sayHelloNull dengan parameter null
$person2->sayHelloNull(null);
