<?php

require_once 'validation.php';
require_once 'validation2.php';

use  Zend\Library\Validation;
use MeuProjeto\Validation as Validation2;


$val = new Validation;
$val2 = new Validation2;
var_dump($val, $val2);