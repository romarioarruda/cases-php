<?php

function routine()
{
    for ($i=1; $i <= 5; $i++) {
        echo "Corrotina $i\n";
        yield;
    }
}

$routine = routine();

$routine->rewind();

for ($i=1; $i <= 3; $i++) {
    echo "Main $i\n";
    $routine->next();
}