<?php

use App\ReadFileType;
use App\ReadFileCsv;

require_once "vendor/autoload.php";

new ReadFileType(new ReadFileCsv('linhas.csv'));
