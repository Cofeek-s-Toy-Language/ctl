<?php


namespace Ctl\Interpriter\Lexer;

use Ctl\Interpriter\Exeption\LexerExeption;
use Ctl\Interpriter\Exeption\LexerExeptionKind;
use ErrorException;

define("FILE_EXT", "lpl");

class Lexer
{
    public string $src_path_string;


    // source file content

    private string $content;

    // lexer cursor
    private int $line;
    private int $col;

    // instructions (code lines)

    private $lines = [];


    public function __construct($src_path_string)
    {
        $this->src_path_string = $src_path_string;
        $this->line = 0;
        $this->col = 0;

        // logic

        $this->read_src();

        $this->process_code();
    }

    // main lexing function

    public function process_code()
    {
        $this->get_lines();
    }



    public function read_src()
    {
        $src_info = pathinfo($this->src_path_string);

        if ($src_info['extension'] !== FILE_EXT)
            throw new LexerExeption(LexerExeptionKind::LEK_INVALID_EXTENSION);

        $this->content = file_get_contents($this->src_path_string);

        if (!$this->content) {
            throw new LexerExeption(LexerExeptionKind::LEK_UNREADABLE_FILE, [$this->src_path_string]);
        }


        // DEBUG: 
        echo $this->content;
    }

    private function get_lines()
    {
        $this->lines = explode(PHP_EOL, $this->content);

        $this->lines = array_filter(explode(PHP_EOL, $this->content), fn ($e) => strlen($e) !== 0);

        // DEBUG:
        echo "Instructions count: ";
        echo sizeof($this->lines) . "\n";

        var_dump($this->lines);
    }
}
