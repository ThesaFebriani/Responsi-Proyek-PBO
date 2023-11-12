<?php

// import data/person.php
require "data/person.php";
// buat object baru dari kelas person
$person1 = new person("Thesa Febriani", "Bengkulu");
// panggil function
$person1->sayHello("Thesa Febriani");
