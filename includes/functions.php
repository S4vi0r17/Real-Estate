<?php

require 'app.php';

function addTemplate( string $name, bool $home = false)
{
    // echo TEMPLATES_URL . "/{$name}.php";
    include TEMPLATES_URL . "/{$name}.php";
}
