<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Thesa Febriaini");
var_dump($company);

$company->programmer = new BackendProgrammer("Thesa Febriani");
var_dump($company);

$company->programmer = new FrontendProgrammer("Thesa Febriani");
var_dump($company);

sayHelloProgrammer(new Programmer("Thesa Febriani"));
sayHelloProgrammer(new BackendProgrammer("Thesa Febriani"));
sayHelloProgrammer(new FrontendProgrammer("Thesa Febriani"));
