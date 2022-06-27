<?php
namespace Skgchn\F3test2\Welcome;

use Skgchn\F3test2\Interfaces\Displayable as Displayable;
use Skgchn\F3test2\Base\AppController as AppController;

class WelcomePage extends AppController implements Displayable {
    function display($f3, $params) {
        echo 'Hello World';
    }
}
