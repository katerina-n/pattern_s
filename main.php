<?php

require __DIR__ . '/vendor/autoload.php';

$reader = new \App\Patterns\Io\CliReader();
$writer = new \App\Patterns\Io\CliWriter();

$game = new \App\Patterns;

//$game->start($writer, $reader);

//$game->cinemaGetter($writer, $reader);
//$game->generateTetris();

//$game->createPostSender();
//$game->arraySort();
//$game->documentState();
$game->editorMemento();