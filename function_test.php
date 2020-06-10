<?php
function writeMsg($name) {
  echo "Hello world please!".($name)."\r\n";
}

$name_list = ['choma1', 'choma2', 'choma3'];

foreach ($name_list as $name){
    writeMsg($name);
}
?>