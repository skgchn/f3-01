<?php
namespace Skgchn\F3test2\Base;
class AppController {
    function beforeroute() {
        echo "Before routing\n\n";
    }

    function afterroute() {
        echo "\n\nAfter routing";
    }
}