<?php
namespace Skgchn\F3test2\Logout;

use Skgchn\F3test2\Base\AppController as AppController;

class GoodByePage extends AppController {
    function display($f3, $params) {
        $f3->reroute('@logout_page');
    }
}