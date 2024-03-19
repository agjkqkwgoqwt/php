<?php

    $someObject = [
        'param1' => 1,
        'method1' => function() {
            echo "method1 executed";
        }
    ];

    echo $someObject['method1']();