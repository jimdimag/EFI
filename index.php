<?php

require 'vendor/autoload.php';

use Slim\Views\PhpRenderer;

$container = new \Slim\Container;
$app = new \Slim\App($container);
$container = $app->getContainer();
// $container['view'] =  new PhpRenderer('../templates/');

//function to see which cars are available
function freeCars($car) {
    $ELEVATOR_CAR_COUNT = 3;
    if(($car == 0 || $car == NULL) ) {
        $car = rand(1,$ELEVATOR_CAR_COUNT);
    } 
    return $car;
}

$app->get('/floor/{floor}/direction/{direction}/currentFloor/{currentFloor}', function($request, $response, $args) {
    $FLOOR_COUNT = 6;
   $car='';
    //check to see if a valid floor was asked for
    if( $args['floor'] > $FLOOR_COUNT) {
        return $response->write("There are not " . $args['floor'] . " Floors in this building");
    } else if($args['currentFloor'] > 1) {
        //cars are not in use yet and all are on the same level
        $cars = freeCars($car);
        return $response->write("Going to Floor " . $args['floor'] . " from floor " . $args['currentFloor'] . " on car " . $cars);
    } else {
        $car1=3; $car2=5; $car3=6;
        return $response->write("Going to Floor " . $args['floor'] . " from floor " . $args['currentFloor'] . " on car 1." );
    }
     
});

$app->run();
?>
