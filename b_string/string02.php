<?php
$str = <<<PEOD
Example of string
spanning multiple lines
using heredoc syntax.
PEOD;

$str2 = <<<XWOK
akang ewok mempunyai cita cita menjadi Presiden.
XWOK;


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
$name = 'Syahrul & Ewok';
echo <<<PEOT
<u>$str2</u><br>
My name is "<b>$name</b>". I am printing some <b>$foo->foo</b>.
Now, I am printing some <b>{$foo->bar[1]}</b>.
This should print a capital 'A': \x41
PEOT;
