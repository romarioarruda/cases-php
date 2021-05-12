<?php

function exampleOne($type) {
    if($type == 'danger') {
        return $type; 
    } else if($type == 'warning') {
        return $type;
    } else if($type == 'alert') {
        return $type;
    } else {
        return "success";
    }
}

echo exampleOne('warning');
echo "\n==================\n";

function RefactoredExample($type) {
    return [
        'danger' => 'danger',
        'warning' => 'warning',
        'alert' => 'alert'
    ][$type] ?? 'success';
}

echo RefactoredExample('dangesr');
echo "\n";