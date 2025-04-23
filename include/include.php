<?php
// Specify a specific folder
$directory = 'php_files'; 
 
//Read folder and call PHP files
foreach (glob("$directory/*.php") as $file) {
    include $file;
}
