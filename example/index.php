<?php

include __DIR__ . '/../vendor/autoload.php';

use mc\clitext;

$txt = new clitext("@");

for ($i = 0; $i < 16; ++$i) {
    for ($j = 0; $j < 16; ++$j) {
        echo $txt->color($i)->background($j)->to_string();
    }
    echo PHP_EOL;
}

$sample = new clitext("Hello, World!");
echo $sample->color("red")->background(clitext::BG_BLUE)->to_string();