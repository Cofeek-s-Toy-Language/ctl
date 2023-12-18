<?php

namespace Ctl\Interpriter\Parser;

class TokenKind
{
    const TK_NUMBER  = "TK_NUMBER";
    const TK_BOOL    = "TK_BOOL";
    const TK_STRING  = "TK_STRING";
    const TK_LITERAL = "TK_LITERAL"; // () [] {} , ...

    public  $literal_tokens = array(
        "(" => "TOKEN_OPAREN",
        ")" => "TOKEN_CPAREN",
        "{" => "TOKEN_OCURLY",
        "}" => "TOKEN_CCURLY",
        "," => "TOKEN_COMMA",
        ";" => "TOKEN_SEMICOLON",
    );
}
