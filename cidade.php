<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Cidade;

$cidades = Cidade::getCidades();


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagemcidade.php';
include __DIR__.'/includes/footer.php';