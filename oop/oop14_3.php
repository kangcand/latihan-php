<?php
class komputer
{
    final public $merk;
}

$laptop_baru = new komputer();
// Fatal error: Cannot declare property komputer::$merk final,
// the final modifier is allowed only for methods and classes
