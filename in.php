<?php
//Set up Openvox to send Get to this file

//Put content  of a GET to file
file_put_contents('file.txt',json_encode($_GET). PHP_EOL, FILE_APPEND | LOCK_EX);

?>