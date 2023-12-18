<?php

namespace Ctl\Interpriter\Exeption;

use Exception;

class LexerExeption extends Exception
{
    /**
      @param {?array} $additional_values 
     **/
    function __construct(string $kind, ?array $additional_values = null)
    {
        match ($kind) {
            LexerExeptionKind::LEK_INVALID_EXTENSION => parent::__construct("[LEXER]: Invalid source file extension"),
            LexerExeptionKind::LEK_UNREADABLE_FILE => parent::__construct("[LEXER]: Unable to read source file: " . $additional_values[0]),
        };
    }
}
