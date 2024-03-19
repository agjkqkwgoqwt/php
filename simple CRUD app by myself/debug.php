<?php

// feature to view debug info in the console log

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log($output);</script>";
}