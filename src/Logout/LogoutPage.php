<?php
namespace Skgchn\F3test2\Logout;

use Skgchn\F3test2\Interfaces\Displayable as Displayable;
use Skgchn\F3test2\Base\AppController as AppController;

class LogoutPage extends AppController implements Displayable {
    function display($f3, $params) {
        $f3->set('params', print_r($params, true));
        //$f3->set('content', 'Logout/LogoutPage.htm');
        //echo \Template::instance()->render('Base/PageTemplate.htm');
        echo \Template::instance()->render('Logout/LogoutPage.htm');

    }
}
