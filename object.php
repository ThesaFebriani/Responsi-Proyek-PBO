<?php

// import data/person.php
require "data/person.php";
// buat object baru dari kelas person
$person1 = new person("Thesa Febriani", "Bengkulu");
// manipulasi properti nama, alamat, negara
$person1->nama = "Thesa Febriani";
// menampilkan hasil
echo "nama = {$person1->nama}";
