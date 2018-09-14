<?php
$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;

$albi = <<<citacita
albi mempunyai cita cita membuka Perusahaan Web Development.
citacita;

/* More complex example, with variables. */
class foo
{
    public $foo;
    public $bar;
    public function foo()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}
$foo = new foo();
$name = 'Albi dan Angga';
echo <<<PEOT
<u>$str</u><br>
My name is "<b>$name</b>". I am printing some <b>$foo->foo</b>.
Now, I am printing some <b>{$foo->bar[1]}</b>.
This should print a capital 'A': \x41
PEOT;
