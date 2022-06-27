<?php
namespace Skgchn\F3test2\Order;

use Skgchn\F3test2\Base\AppController as AppController;
use Skgchn\F3test2\Interfaces\Displayable as Displayable;

class OrderDetailsPage extends AppController implements Displayable{
    function display($f3, $params) {
        echo "<pre>";
        print_r($params);
        echo "</pre>";
        echo "You have sought details of order number ${params['order_num']}.";
    }
}