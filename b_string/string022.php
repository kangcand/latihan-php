<?php
$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;
/* More complex example, with variables. */
class foo
{
    public $foo;
    public $bar;
    public function foo()
    {
        $this->foo = 'Rei Sang Penceramah';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}
$foo = new foo();
$name = 'Bogels Kasep';
echo <<<EOT
<u>$str</u><br>
My name is "<b>$name</b>". I am printing some <b>$foo->foo</b>.
Now, I am printing some <b>{$foo->bar[0]}</b>.
This should print a capital 'A': \x41
EOT;
