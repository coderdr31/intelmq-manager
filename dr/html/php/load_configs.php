<?php
    require('config.php');

    $config_text = '';

    if (array_key_exists($_GET['file'], $FILES)) {
        $filename = $FILES[$_GET['file']];
    }

    //$filename='/opt/intelmq/etc/runtime.conf';
    $config_text = file_get_contents($filename);

    echo $config_text;
?>