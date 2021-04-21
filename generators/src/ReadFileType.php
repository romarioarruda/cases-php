<?php

namespace App;

class readFileType
{
    public function __construct(ReadInterface $read)
    {
        $content = $read->readFileComplete();
        foreach ($content as $line) {
            printf('%s tem %d anos%s', $line[0], $line[1], PHP_EOL);
        }
    }
}