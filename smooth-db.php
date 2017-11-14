#!/usr/bin/env php
<?php


//print "$argv arguments were passed. In order: \n";

for ($i = 1; $i <= $argc -1; ++$i) {
//    print "$i: $argv[$i]\n";
    // todo check required params
}

$command = $argv[1];

// todo format command

switch ($command) {
    case "install" :
        installDatabase();
        break;
    case "update" :
        updateDatabase();
        break;
    case "version" :
        getVersion();
        break;
    default :
        echo "Usage: ..";
        break;
}


function installDatabase() {
    echo "Installing Database";

    // todo check if DB is currently installed

    // todo Output version and give user option to re-install database
}

function updateDatabase() {
    echo "Installing Database";
}

function getVersion() {
    echo "Current Database Version: v2.12.6\n" ;
}

?>