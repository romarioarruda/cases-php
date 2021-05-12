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

function exampleTwo($type) {
    $typeList = [
        'danger' => 'danger',
        'warning' => 'warning',
        'alert' => 'alert'
    ];
    
    return $typeList[$type];
}

echo exampleTwo('danger');
echo "\n==================\n";

function exampleThree($type) {
    return [
        'danger' => 'danger',
        'warning' => 'warning',
        'alert' => 'alert'
    ][$type] ?? 'success';
}

echo exampleThree('dangesr');
echo "\n";