<?php

namespace App;

use App\ReadInterface;

class ReadFileCsv implements ReadInterface
{
    private $file;

    public function __construct(string $fileName)
    {
        $this->file = fopen($fileName, 'r');
    }

    public function readFileComplete(): iterable
    {
        while (!feof($this->file)) {
            yield fgetcsv($this->file);
        }
    }

    public function __destruct()
    {
        fclose($this->file);
    }
}
