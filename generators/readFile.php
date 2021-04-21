<?php

use App\ReadFileType;
use App\LeitorArquivoCsv;

require_once "vendor/autoload.php";

new ReadFileType(new LeitorArquivoCsv('linhas.csv'));
