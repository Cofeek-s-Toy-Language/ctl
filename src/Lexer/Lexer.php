<?php

namespace Ctl\Interpriter\Lexer;

class Lexer
{
    public string $src_path;

    public int $cursor;



    public function __construct($src_path)
    {
        $this->src_path = $src_path;
        $this->cursor = 0;
    }

    public function read_src(): string | false
    {
        return file_get_contents($this->src_path);
    }
}
