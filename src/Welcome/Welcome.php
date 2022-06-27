<?php
namespace Skgchn\F3test2\Welcome;

use Skgchn\F3test2\Base\AppController as AppController;

class Welcome extends AppController {
    function get($f3, $params) {
        $f3->set('content', 'Welcome/Welcome.htm');
        $f3->set('beverages', array(
            'coffee'=>array('arabica','barako','liberica','kopiluwak'),
            'tea'=>array('darjeeling','pekoe','samovar')
        ));
        echo \Template::instance()->render('Base/PageTemplate.htm');
    }

    function post() {}
    function put() {}
    function delete() {}
}
