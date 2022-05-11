<?php

require_once "vendor/autoload.php";

use usuario\Cep\Search;

$busca = new Search;
$result = $busca->getAddressFromZipCode('13616230');
print_r($result);
