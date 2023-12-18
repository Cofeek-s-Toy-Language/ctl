<?php

use Ctl\Interpriter\Lexer\Lexer;

require './vendor/autoload.php';

$lexer = new Lexer("file.ctl");

echo  $lexer->read_src();
